<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeacherCourseResource;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeacherCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $teacherCourses = TeacherCourseResource::collection(TeacherCourse::latest()->paginate(50));

        $teacherCourseData = $teacherCourses->map(function ($teacherCourse) {
            return [
                'id' => $teacherCourse->id,
                'teacher_name' => $teacherCourse->teacher_name,
                'teacher_slug' => $teacherCourse->teacher_slug,
                'course' => $teacherCourse->course,
                'course_slug' => $teacherCourse->course_slug,
                'department' => $teacherCourse->department,
                'department_slug' => $teacherCourse->department_slug,
                'class_stream' => $teacherCourse->class_stream,
                'created_at' => $teacherCourse->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $teacherCourseData,
            'current_page' => $teacherCourses->currentPage(),
            'last_page' => $teacherCourses->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function teacher_course_register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'uniqueId' => 'required',
        ]);

        try {

            $teacherName = $request->input('first_name') . ' ' . $request->input('middle_name') . ' ' . $request->input('last_name');
            $teacherSlug = $request->input('uniqueId');
            $courses = $request->input('courses');
            $course_slug = $request->input('course_slug');
            $class_stream = $request->input('class_stream');

            TeacherCourse::create([
                'teacher_name' => $teacherName,
                'teacher_slug' => $teacherSlug,
                'course' => json_encode($courses),
                'course_slug' => json_encode($course_slug),
                'class_stream' => json_encode($class_stream),
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
            'course' => 'required|array',
            'course_slug' => 'required|array',
            'class_stream' => 'required|array',
        ]);

        try {
            $teacherCourse = TeacherCourse::findOrFail($id);

            $teacherCourse->teacher_name = $request->first_name . ' ' . $request->middle_name . ' ' . $request->last_name;
            $teacherCourse->course = json_encode($request->input('course'));
            $teacherCourse->course_slug = json_encode($request->input('course_slug'));
            $teacherCourse->class_stream = json_encode($request->input('class_stream'));

            $teacherCourse->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }


    public function show(TeacherCourse $teacherCourse)
    {
        $teacherCourses = TeacherCourse::find($teacherCourse->id);
        $data = [
            "data" => $teacherCourses,
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
        $setting = TeacherCourse::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
