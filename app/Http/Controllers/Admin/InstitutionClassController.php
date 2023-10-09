<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionClassResource;
use App\Models\InstitutionClass;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $classes = InstitutionClassResource::collection(InstitutionClass::latest()->paginate(50));

        $classData = $classes->map(function ($class) {
            return [
                'id' => $class->id,
                'slug' => $class->slug,
                'class' => $class->class,
                'created_at' => $class->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $classData,
            'current_page' => $classes->currentPage(),
            'last_page' => $classes->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionClass(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'className' => 'required',
        ]);

        $institutionClass = new InstitutionClass();

        $institutionClass->slug = $request->input('uniqueId');
        $institutionClass->class = $request->input('className');

        $institutionClass->save();

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
            'className' => 'required',
        ]);

        try {
            $institution = InstitutionClass::findOrFail($id);

            $institution->class = $request->className;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionClass $institutionClass)
    // {
    //     $data = [
    //         "data" => $institutionClass,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionClass $institutionClass)
    {
        $institutionClasss = InstitutionClass::find($institutionClass->id);
        $data = [
            "data" => $institutionClasss,
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
        $setting = InstitutionClass::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
