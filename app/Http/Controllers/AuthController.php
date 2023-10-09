<?php

namespace App\Http\Controllers;

use App\Models\TeacherCourse;
use App\Models\TeacherDepartment;
use App\Models\User;
use App\Notifications\StaffLoginNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendEmail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Login a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */


    public function forgotPwd(Request $request)
    {
        $request->validate([
            'surName' => 'required|string',
            'email' => 'required|email',
            'mobileNumber' => 'required|string',
        ]);

        $credentials = $request->only('last_name', 'email', 'phone_no');

        $user = User::where($credentials)->first();

        if (!$user) {
            return response()->json(['message' => 'User Unauthorized'], 401);
        }

        $user->notify(new PasswordResetNotification());

        return response()->json(['message' => 'Email sent successfully']);
    }

    public function studentLogin(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'password' => 'required|string',
            'student_adm_no' => 'required|string',
        ]);

        $credentials = request(['first_name', 'password', 'student_adm_no']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        } elseif (Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Authorized',
            ], 200);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addYear(); // set expiry time to 1 year from now
        $token->save();

        return response()->json([
            'message' => 'Successfully authenticated',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);
    }

    public function parentLogin(Request $request)
    {
        $request->validate([
            'last_name' => 'required|string',
            'password' => 'required|string',
            'student_adm_no' => 'required|string',
        ]);

        $credentials = request(['last_name', 'password', 'student_adm_no']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        } elseif (Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Authorized',
            ], 200);
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addYear(); // set expiry time to 1 year from now
        $token->save();

        return response()->json([
            'message' => 'Successfully authenticated',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);
    }


    public function staffLogin(Request $request)
    {
        $request->validate([
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('last_name', 'email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $staff = User::where('email', $credentials['email'])->first();

        if (!$staff) {
            return response()->json(['message' => 'Invalid login credentials'], 401);
        }

        $staff->notify(new StaffLoginNotification());

        return response()->json([
            'message' => 'Successfully authenticated',
        ]);
    }

    public function teacher_register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'uniqueId' => 'required',
            'email' => 'required|email|unique:users',
            'phone_no' => 'nullable',
            'gender' => 'nullable',
            'teacher_tsc_no' => 'required',
            'password' => 'required',
            'departments' => 'required|array',
            'department_slug' => 'required|array',
            'department_roles' => 'required|array',
        ]);

        try {
            // Create a new User instance
            $teacherRegistration = new User();
            $teacherRegistration->first_name = $request->input('first_name');
            $teacherRegistration->middle_name = $request->input('middle_name');
            $teacherRegistration->last_name = $request->input('last_name');
            $teacherRegistration->slug = $request->input('uniqueId');
            $teacherRegistration->email = $request->input('email');
            $teacherRegistration->phone_no = $request->input('phone_no');
            $teacherRegistration->user_role = 'Teacher';
            $teacherRegistration->gender = $request->input('gender');
            $teacherRegistration->teacher_tsc_no = $request->input('teacher_tsc_no');
            $teacherRegistration->user_account_status = $request->input('user_account_status');
            $teacherRegistration->password = Hash::make($request->input('password'));
            $teacherRegistration->save();

            $teacherName = $request->input('first_name') . ' ' . $request->input('middle_name') . ' ' . $request->input('last_name');
            $teacherSlug = $request->input('uniqueId');
            $courses = $request->input('courses');
            $course_slug = $request->input('course_slug');
            $departments = $request->input('departments');
            $department_roles = $request->input('department_roles');
            $department_slug = $request->input('department_slug');
            $class_stream = $request->input('class_stream');

            TeacherDepartment::create([
                'teacher_name' => $teacherName,
                'teacher_slug' => $teacherSlug,
                'department' => json_encode($departments),
                'department_role' => json_encode($department_roles),
                'department_slug' => json_encode($department_slug),
            ]);

            TeacherCourse::create([
                'teacher_name' => $teacherName,
                'teacher_slug' => $teacherSlug,
                'course' => json_encode($courses),
                'course_slug' => json_encode($course_slug),
                'department' => json_encode($departments),
                'department_slug' => json_encode($department_slug),
                'class_stream' => json_encode($class_stream),
            ]);


            return response()->json(['message' => 'Teacher registered successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while registering teacher', 'error' => $e->getMessage()], 500);
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate the request data here (you can customize the validation rules based on your requirements)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            // Add more validation rules for other fields you want to update
        ]);

        // Retrieve the authenticated user's record from the database
        $user = User::findOrFail($user->id);

        // Update the user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update other fields as needed

        $user->save();

        return response()->json(['message' => 'Profile updated successfully']);
    }


    /**
     * Logout a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json(['message' => 'Logged out'], 200)
            ->cookie('laravel_session', null, -1, '/', null, false, true);
    }
}
