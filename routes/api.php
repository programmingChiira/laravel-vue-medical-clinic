<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Crypt;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum', 'throttle:1200,1'])->get('/user', function (Request $request) {
//     $user = $request->user();
//     return $user;
// });

Route::middleware(['auth:sanctum', 'throttle:1200,1'])->get('/user', function (Request $request) {
    $user = $request->user();

    $decryptedUser = [
        'id' => $user->id,
        'first_name' => $user->first_name,
        'middle_name' => $user->middle_name,
        'last_name' => $user->last_name,
        'slug' => $user->slug,
        'email' => $user->email,
        'phone_no' => $user->phone_no,
        'user_role' => $user->user_role,
        'gender' => $user->gender,
        'student_adm_no' => $user->student_adm_no,
        'student_upi_no' => $user->student_upi_no,
        'teacher_tsc_no' => $user->teacher_tsc_no,
        'student_career_option' => $user->student_career_option,
        'user_account_status' => $user->user_account_status,
    ];
    return $decryptedUser;
});

Route::middleware('auth:sanctum')->group(function () {
    Route::put('/updateProfile/{user}', [UserController::class, 'updateProfile']);
    Route::put('/updatePassword/{user}', [UserController::class, 'updatePassword']);

    Route::post('/teacherRegistration', [AuthController::class, 'teacher_register']);
    Route::post('/updateTeacherGeneralProfile/{id}', [UserController::class, 'update_teacher_profile']);
    Route::post('/deactivateTeacherAccount/{id}', [UserController::class, 'deactivate_teacher_account']);

});

Route::post('/register', [AuthController::class, 'store']);
Route::post('/studentLogin', [AuthController::class, 'studentLogin']);
Route::post('/parentLogin', [AuthController::class, 'parentLogin']);
Route::post('/staffLogin', [AuthController::class, 'staffLogin']);
Route::post('/forgotPwd', [AuthController::class, 'forgotPwd']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['throttle:1200,1'])->get('/activeTeacherList', [UserController::class, 'active_teacher_list']);
Route::middleware(['throttle:1200,1'])->get('/inactiveTeacherList', [UserController::class, 'inactive_teacher_list']);
Route::middleware(['throttle:1200,1'])->get('/users/{user:slug}', [UserController::class, 'show']);
