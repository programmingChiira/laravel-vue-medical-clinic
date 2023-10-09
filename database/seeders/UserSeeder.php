<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * User roles are as below
         * Administrator
         * Teacher
         * NonTeaching
         * Parent
         * Student
         */

        $adminSlug = Str::random(100);
        $adminTscNo = Str::random(10);
        User::create([
            'first_name' => 'Admin',
            'middle_name' => 'admin',
            'last_name' => 'admin',
            'slug' => $adminSlug,
            'email' => 'admin@gmail.com',
            'phone_no' => '0711111111',
            'user_role' => 'Administrator',
            'gender' => 'Male',
            'teacher_tsc_no' => $adminTscNo,
            'user_account_status' => 'Active',
            'password' => bcrypt('0711111111'),
        ]);

        $admin2Slug = Str::random(100);
        $admin2TscNo = Str::random(10);
        User::create([
            'first_name' => 'Admin2',
            'middle_name' => 'admin2',
            'last_name' => 'admin2',
            'slug' => $admin2Slug,
            'email' => 'admin2@gmail.com',
            'phone_no' => '0711111122',
            'user_role' => 'Teacher',
            'gender' => 'Male',
            'teacher_tsc_no' => $admin2TscNo,
            'user_account_status' => 'Active',
            'password' => bcrypt('0711111122'),
        ]);

        $teacherSlug = Str::random(100);
        $teacherTscNo = Str::random(10);
        User::create([
            'first_name' => 'Teacher',
            'middle_name' => 'teacher',
            'last_name' => 'teacher',
            'slug' => $teacherSlug,
            'email' => 'teacher@gmail.com',
            'phone_no' => '0722222222',
            'user_role' => 'Teacher',
            'gender' => 'Male',
            'teacher_tsc_no' => $teacherTscNo,
            'user_account_status' => 'Active',
            'password' => bcrypt('0722222222'),
        ]);

        $nonteachingSlug = Str::random(100);
        $nonteachingTscNo = Str::random(10);
        User::create([
            'first_name' => 'NonTeaching',
            'middle_name' => 'nonteaching',
            'last_name' => 'nonteaching',
            'slug' => $nonteachingSlug,
            'email' => 'nonteaching@gmail.com',
            'phone_no' => '0733333333',
            'user_role' => 'Teacher',
            'gender' => 'Male',
            'teacher_tsc_no' => $nonteachingTscNo,
            'user_account_status' => 'Active',
            'password' => bcrypt('0733333333'),
        ]);

        $parentSlug = Str::random(100);
        $parentTscNo = Str::random(10);
        User::create([
            'first_name' => 'Parent',
            'middle_name' => 'parent',
            'last_name' => 'parent',
            'slug' => $parentSlug,
            'email' => 'parent@gmail.com',
            'phone_no' => '0744444444',
            'user_role' => 'Teacher',
            'gender' => 'Male',
            'teacher_tsc_no' => $parentTscNo,
            'user_account_status' => 'Active',
            'password' => bcrypt('0744444444'),
        ]);

        $studentSlug = Str::random(100);
        $studentAdmNo = Str::random(4);
        $studentTscNo = Str::random(10);
        $studentUpiNo = Str::random(10);
        User::create([
            'first_name' => 'Student',
            'middle_name' => 'student',
            'last_name' => 'student',
            'slug' => $studentSlug,
            'email' => 'student@gmail.com',
            'phone_no' => '0755555555',
            'user_role' => 'Teacher',
            'gender' => 'Male',
            'teacher_tsc_no' => $studentTscNo,
            'student_adm_no' => $studentAdmNo,
            'student_upi_no' => $studentUpiNo,
            'student_career_option' => 'Software Development',
            'user_account_status' => 'Active',
            'password' => bcrypt('0755555555'),
        ]);


    }
}
