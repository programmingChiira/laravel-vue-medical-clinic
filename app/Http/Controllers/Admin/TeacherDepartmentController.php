<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherDepartmentResource;
use App\Models\TeacherDepartment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeacherDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $teacherDepartments = TeacherDepartmentResource::collection(TeacherDepartment::latest()->paginate(50));

        $teacherDepartmentData = $teacherDepartments->map(function ($teacherDepartment) {
            return [
                'id' => $teacherDepartment->id,
                'teacher_name' => $teacherDepartment->teacher_name,
                'teacher_slug' => $teacherDepartment->teacher_slug,
                'department' => $teacherDepartment->department,
                'department_slug' => $teacherDepartment->department_slug,
                'department_role' => $teacherDepartment->department_role,
                'created_at' => $teacherDepartment->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $teacherDepartmentData,
            'current_page' => $teacherDepartments->currentPage(),
            'last_page' => $teacherDepartments->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function storeTeacherDepartment(Request $request)
    // {
    // }

    public function teacher_department_register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'uniqueId' => 'required',
            'departments' => 'required|array',
            'department_slug' => 'required|array',
            'department_roles' => 'required|array',
        ]);

        try {

            $teacherName = $request->input('first_name') . ' ' . $request->input('middle_name') . ' ' . $request->input('last_name');
            $teacherSlug = $request->input('uniqueId');
            $departments = $request->input('departments');
            $department_roles = $request->input('department_roles');
            $department_slug = $request->input('department_slug');

            TeacherDepartment::create([
                'teacher_name' => $teacherName,
                'teacher_slug' => $teacherSlug,
                'department' => json_encode($departments),
                'department_role' => json_encode($department_roles),
                'department_slug' => json_encode($department_slug),
            ]);


            return response()->json(['message' => 'Teacher registered successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while registering teacher', 'error' => $e->getMessage()], 500);
        }
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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'departments' => 'required|array',
            'department_roles' => 'required|array',
            'department_slug' => 'required|array',
        ]);

        try {
            $teacherDepartment = TeacherDepartment::findOrFail($id);

            $teacherDepartment->teacher_name = $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name;
            $teacherDepartment->department = json_encode($request->input('departments'));
            $teacherDepartment->department_role = json_encode($request->input('department_roles'));
            $teacherDepartment->department_slug = json_encode($request->input('department_slug'));

            $teacherDepartment->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    public function show(TeacherDepartment $teacherDepartment)
    {
        $teacherDepartments = TeacherDepartment::find($teacherDepartment->id);
        $data = [
            "data" => $teacherDepartments,
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
        $setting = TeacherDepartment::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
