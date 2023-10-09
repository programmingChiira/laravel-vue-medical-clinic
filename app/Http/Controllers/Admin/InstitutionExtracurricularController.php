<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionExtracurricularResource;
use App\Models\InstitutionExtracurricular;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $extracurriculars = InstitutionExtracurricularResource::collection(InstitutionExtracurricular::latest()->paginate(50));

        $extracurricularData = $extracurriculars->map(function ($extracurricular) {
            return [
                'id' => $extracurricular->id,
                'slug' => $extracurricular->slug,
                'extracurricular' => $extracurricular->extracurricular,
                'created_at' => $extracurricular->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $extracurricularData,
            'current_page' => $extracurriculars->currentPage(),
            'last_page' => $extracurriculars->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionExtracurricular(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'extracurricularName' => 'required',
        ]);

        $institutionExtracurricular = new InstitutionExtracurricular();

        $institutionExtracurricular->slug = $request->input('uniqueId');
        $institutionExtracurricular->extracurricular = $request->input('extracurricularName');

        $institutionExtracurricular->save();

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
            'extracurricularName' => 'required',
        ]);

        try {
            $institution = InstitutionExtracurricular::findOrFail($id);

            $institution->extracurricular = $request->extracurricularName;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionExtracurricular $institutionExtracurricular)
    // {
    //     $data = [
    //         "data" => $institutionExtracurricular,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionExtracurricular $institutionExtracurricular)
    {
        $institutionExtracurriculars = InstitutionExtracurricular::find($institutionExtracurricular->id);
        $data = [
            "data" => $institutionExtracurriculars,
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
        $setting = InstitutionExtracurricular::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
