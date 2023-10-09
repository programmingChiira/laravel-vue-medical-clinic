<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\InstitutionGeneralSettingController;
use App\Http\Controllers\Admin\InstitutionCarouselController;
use App\Http\Controllers\Admin\InstitutionGovernanceController;
use App\Http\Controllers\Admin\InstitutionClassController;
use App\Http\Controllers\Admin\InstitutionClubController;
use App\Http\Controllers\Admin\InstitutionCourseController;
use App\Http\Controllers\Admin\InstitutionDepartmentController;
use App\Http\Controllers\Admin\InstitutionEnrollmentController;
use App\Http\Controllers\Admin\InstitutionExtracurricularController;
use App\Http\Controllers\Admin\InstitutionStreamController;
use App\Http\Controllers\Admin\TeacherCourseController;
use App\Http\Controllers\Admin\TeacherDepartmentController;
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
    Route::post('/adminSchoolGeneralSettings', [InstitutionGeneralSettingController::class, 'storeSchoolSettings']);
    Route::post('/updateSchoolGeneralSettings/{id}', [InstitutionGeneralSettingController::class, 'update']);

    Route::post('/adminSchoolCarousels', [InstitutionCarouselController::class, 'storeSchoolCarousels']);
    Route::post('/updateSchoolCarousels/{id}', [InstitutionCarouselController::class, 'update']);

    Route::post('/adminInstitutionGovernance', [InstitutionGovernanceController::class, 'storeInstitutionGovernance']);
    Route::post('/updateInstitutionGovernance/{id}', [InstitutionGovernanceController::class, 'update']);
    Route::delete('/deleteInstitutionGovernance/{id}', [InstitutionGovernanceController::class, 'destroy']);

    Route::post('/adminInstitutionClass', [InstitutionClassController::class, 'storeInstitutionClass']);
    Route::post('/updateInstitutionClass/{id}', [InstitutionClassController::class, 'update']);
    Route::delete('/deleteInstitutionClass/{id}', [InstitutionClassController::class, 'destroy']);

    Route::post('/adminInstitutionStream', [InstitutionStreamController::class, 'storeInstitutionStream']);
    Route::post('/updateInstitutionStream/{id}', [InstitutionStreamController::class, 'update']);
    Route::delete('/deleteInstitutionStream/{id}', [InstitutionStreamController::class, 'destroy']);

    Route::post('/adminInstitutionDepartment', [InstitutionDepartmentController::class, 'storeInstitutionDepartment']);
    Route::post('/updateInstitutionDepartment/{id}', [InstitutionDepartmentController::class, 'update']);
    Route::delete('/deleteInstitutionDepartment/{id}', [InstitutionDepartmentController::class, 'destroy']);

    Route::post('/adminInstitutionClub', [InstitutionClubController::class, 'storeInstitutionClub']);
    Route::post('/updateInstitutionClub/{id}', [InstitutionClubController::class, 'update']);
    Route::delete('/deleteInstitutionClub/{id}', [InstitutionClubController::class, 'destroy']);

    Route::post('/adminInstitutionExtracurricular', [InstitutionExtracurricularController::class, 'storeInstitutionExtracurricular']);
    Route::post('/updateInstitutionExtracurricular/{id}', [InstitutionExtracurricularController::class, 'update']);
    Route::delete('/deleteInstitutionExtracurricular/{id}', [InstitutionExtracurricularController::class, 'destroy']);

    Route::post('/adminInstitutionCourse', [InstitutionCourseController::class, 'storeInstitutionCourse']);
    Route::post('/updateInstitutionCourse/{id}', [InstitutionCourseController::class, 'update']);
    Route::delete('/deleteInstitutionCourse/{id}', [InstitutionCourseController::class, 'destroy']);

    Route::post('/adminInstitutionEnrollment', [InstitutionEnrollmentController::class, 'storeInstitutionEnrollment']);
    Route::post('/updateInstitutionEnrollment/{id}', [InstitutionEnrollmentController::class, 'update']);
    Route::delete('/deleteInstitutionEnrollment/{id}', [InstitutionEnrollmentController::class, 'destroy']);

    Route::post('/teacherRegistration', [AuthController::class, 'teacher_register']);
    Route::post('/updateTeacherGeneralProfile/{id}', [UserController::class, 'update_teacher_profile']);
    Route::post('/deactivateTeacherAccount/{id}', [UserController::class, 'deactivate_teacher_account']);
    Route::post('/teacherDepartmentRegistration', [TeacherDepartmentController::class, 'teacher_department_register']);
    Route::post('/updateTeacherDepartmentProfile/{id}', [TeacherDepartmentController::class, 'update']);
    Route::post('/teacherCourseRegistration', [TeacherCourseController::class, 'teacher_course_register']);

    Route::post('/updateTeacherCourseProfile/{id}', [TeacherCourseController::class, 'update']);

});

Route::post('/register', [AuthController::class, 'store']);
Route::post('/studentLogin', [AuthController::class, 'studentLogin']);
Route::post('/parentLogin', [AuthController::class, 'parentLogin']);
Route::post('/staffLogin', [AuthController::class, 'staffLogin']);
Route::post('/forgotPwd', [AuthController::class, 'forgotPwd']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['throttle:1200,1'])->get('/institutionGeneralSettings', [InstitutionGeneralSettingController::class, 'index']);

Route::middleware(['throttle:1200,1'])->get('/institutionCarousels', [InstitutionCarouselController::class, 'index']);

Route::middleware(['throttle:1200,1'])->get('/institutionGovernances', [InstitutionGovernanceController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionGovernances/{institutionGovernance:slug}', [InstitutionGovernanceController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionClasses', [InstitutionClassController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionClasses/{institutionClass:slug}', [InstitutionClassController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionStreams', [InstitutionStreamController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionStreams/{institutionStream:slug}', [InstitutionStreamController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionDepartments', [InstitutionDepartmentController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionDepartments/{institutionDepartment:slug}', [InstitutionDepartmentController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionClubs', [InstitutionClubController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionClubs/{institutionClub:slug}', [InstitutionClubController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionExtracurriculars', [InstitutionExtracurricularController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionExtracurriculars/{institutionExtracurricular:slug}', [InstitutionExtracurricularController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionCourses', [InstitutionCourseController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionCourses/{institutionCourse:slug}', [InstitutionCourseController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/institutionEnrollments', [InstitutionEnrollmentController::class, 'index']);
Route::middleware(['throttle:1200,1'])->get('/institutionEnrollments/{institutionEnrollment:slug}', [InstitutionEnrollmentController::class, 'show']);

Route::middleware(['throttle:1200,1'])->get('/activeTeacherList', [UserController::class, 'active_teacher_list']);
Route::middleware(['throttle:1200,1'])->get('/inactiveTeacherList', [UserController::class, 'inactive_teacher_list']);
Route::middleware(['throttle:1200,1'])->get('/users/{user:slug}', [UserController::class, 'show']);
