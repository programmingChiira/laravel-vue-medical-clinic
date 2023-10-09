<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\TeacherCourse;
use App\Models\TeacherDepartment;
use App\Models\User;
use App\Notifications\updatePasswordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Notifications\updateProfileNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function active_teacher_list(Request $request)
    {
        $users = User::where('user_role', 'Teacher')
            ->where('user_account_status', 'Active')
            ->latest()
            ->paginate(50);

        $userData = UserResource::collection($users);

        return response()->json([
            'data' => $userData,
            'current_page' => $users->currentPage(),
            'last_page' => $users->lastPage()
        ]);
    }

    public function inactive_teacher_list(Request $request)
    {
        $users = User::where('user_role', 'Teacher')
            ->where('user_account_status', 'Inactive')
            ->latest()
            ->paginate(50);

        $userData = UserResource::collection($users);

        return response()->json([
            'data' => $userData,
            'current_page' => $users->currentPage(),
            'last_page' => $users->lastPage()
        ]);
    }

    public function update_teacher_profile(Request $request, $id)
    {
        try {
            $request->validate([
                'staffFirstName' => 'required',
                'staffMiddleName' => 'required',
                'staffSurName' => 'required',
                'staffEmail' => 'required|email|unique:users,email,' . $id,
                'staffMobileNumber' => 'nullable',
                'staffGender' => 'nullable',
                'staffTscNumber' => 'required',
            ]);

            $teacher = User::findOrFail($id);

            $teacher->update([
                'first_name' => $request->input('staffFirstName'),
                'middle_name' => $request->input('staffMiddleName'),
                'last_name' => $request->input('staffSurName'),
                'email' => $request->input('staffEmail'),
                'phone_no' => $request->input('staffMobileNumber'),
                'gender' => $request->input('staffGender'),
                'teacher_tsc_no' => $request->input('staffTscNumber'),
            ]);

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    public function deactivate_teacher_account(Request $request, $id)
    {
        try {
            $request->validate([
                'user_account_status' => 'required',
            ]);

            $teacher = User::findOrFail($id);

            $teacher->update([
                'user_account_status' => $request->input('user_account_status'),
            ]);

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    public function show(User $user)
    {
        $user = User::find($user->id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $department = TeacherDepartment::where('teacher_slug', $user->slug)->first();
        $course = TeacherCourse::where('teacher_slug', $user->slug)->first();

        $userData = [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'middle_name' => $user->middle_name,
            'last_name' => $user->last_name,
            'slug' => $user->slug,
            'email' => $user->email,
            'phone_no' => $user->phone_no,
            'user_role' => $user->user_role,
            'student_adm_no' => $user->student_adm_no,
            'student_upi_no' => $user->student_upi_no,
            'gender' => $user->gender,
            'teacher_tsc_no' => $user->teacher_tsc_no,
            'student_career_option' => $user->student_career_option,
            'user_account_status' => $user->user_account_status,
            'created_at' => $user->created_at->diffForHumans(),
            'department' => $department,
            'course' => $course,
        ];

        return response()->json([
            'data' => $userData,
        ]);
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|string',
            'new_password' => 'required|string',
        ]);

        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 400);
        }

        $user->password = Hash::make($request->input('new_password'));

        $email = Auth::user()->email;

        $userEmailNotify = User::where('email', $email)->first();

        if (!$userEmailNotify) {
            return response()->json(['message' => 'Invalid login credentials'], 401);
        }

        $userEmailNotify->notify(new updatePasswordNotification());

        $user->save();

        return response()->json(['message' => 'Password updated successfully']);
    }
}
