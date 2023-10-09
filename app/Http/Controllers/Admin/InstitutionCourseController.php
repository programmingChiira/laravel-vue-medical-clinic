<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionCourseResource;
use App\Models\InstitutionCourse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     * Course
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $courses = InstitutionCourseResource::collection(InstitutionCourse::latest()->paginate(50));

        $courseData = $courses->map(function ($course) {
            return [
                'id' => $course->id,
                'slug' => $course->slug,
                'department_slug' => $course->department_slug,
                'course' => $course->course,
                'department' => $course->department,
                'created_at' => $course->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $courseData,
            'current_page' => $courses->currentPage(),
            'last_page' => $courses->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionCourse(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'departmentUniqueId' => 'required',
            'courseName' => 'required',
            'departmentName' => 'required',
        ]);

        $institutionCourse = new InstitutionCourse();

        $institutionCourse->slug = $request->input('uniqueId');
        $institutionCourse->department_slug = $request->input('departmentUniqueId');
        $institutionCourse->course = $request->input('courseName');
        $institutionCourse->department = $request->input('departmentName');

        $institutionCourse->save();

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
            'courseName' => 'required',
            'departmentName' => 'required',
            'departmentUniqueId' => 'required',
        ]);

        try {
            $institution = InstitutionCourse::findOrFail($id);

            $institution->course = $request->courseName;
            $institution->department = $request->departmentName;
            $institution->department_slug = $request->departmentUniqueId;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionCourse $institutionCourse)
    // {
    //     $data = [
    //         "data" => $institutionCourse,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionCourse $institutionCourse)
    {
        $institutionCourses = InstitutionCourse::find($institutionCourse->id);
        $data = [
            "data" => $institutionCourses,
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
        $setting = InstitutionCourse::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
