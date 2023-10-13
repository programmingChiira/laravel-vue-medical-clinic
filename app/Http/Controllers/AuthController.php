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
        //
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
