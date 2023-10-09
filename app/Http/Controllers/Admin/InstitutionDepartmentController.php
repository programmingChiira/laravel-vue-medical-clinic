<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionDepartmentResource;
use App\Models\InstitutionDepartment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $departments = InstitutionDepartmentResource::collection(InstitutionDepartment::latest()->paginate(50));

        $departmentData = $departments->map(function ($department) {
            return [
                'id' => $department->id,
                'slug' => $department->slug,
                'department' => $department->department,
                'created_at' => $department->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $departmentData,
            'current_page' => $departments->currentPage(),
            'last_page' => $departments->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionDepartment(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'departmentName' => 'required',
        ]);

        $institutionDepartment = new InstitutionDepartment();

        $institutionDepartment->slug = $request->input('uniqueId');
        $institutionDepartment->department = $request->input('departmentName');

        $institutionDepartment->save();

        return response()->json(['message' => 'Class saved successfully'], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'departmentName' => 'required',
        ]);

        try {
            $institution = InstitutionDepartment::findOrFail($id);

            $institution->department = $request->departmentName;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionDepartment $institutionDepartment)
    // {
    //     $data = [
    //         "data" => $institutionDepartment,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionDepartment $institutionDepartment)
    {
        $institutionDepartments = InstitutionDepartment::find($institutionDepartment->id);
        $data = [
            "data" => $institutionDepartments,
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = InstitutionDepartment::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
