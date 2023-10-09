<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('institution_logo')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('institution_email_one')->nullable();
            $table->string('institution_email_two')->nullable();
            $table->string('institution_phone_one')->nullable();
            $table->string('institution_phone_two')->nullable();
            $table->string('institution_county')->nullable();
            $table->string('institution_address')->nullable();
            $table->string('institution_pinned_location')->nullable();
            $table->string('institution_type')->nullable();
            $table->string('institution_mode')->nullable();
            $table->string('institution_gender_distro')->nullable();
            $table->string('institution_welcome_message')->nullable();
            $table->string('institution_mission_and_vision')->nullable();
            $table->string('year_of_enrollment')->nullable();
            $table->string('month_of_enrollment')->nullable();
            $table->string('day_of_enrollment')->nullable();
            $table->string('enrollment_requirment_1')->nullable();
            $table->string('enrollment_requirment_2')->nullable();
            $table->string('enrollment_requirment_3')->nullable();
            $table->string('enrollment_requirment_4')->nullable();
            $table->string('enrollment_requirment_5')->nullable();
            $table->string('enrollment_requirment_6')->nullable();
            $table->string('enrollment_requirment_7')->nullable();
            $table->string('enrollment_requirment_8')->nullable();
            $table->string('enrollment_requirment_9')->nullable();
            $table->string('enrollment_requirment_10')->nullable();
            $table->string('enrollment_requirment_11')->nullable();
            $table->string('enrollment_requirment_12')->nullable();
            $table->string('enrollment_requirment_13')->nullable();
            $table->string('enrollment_requirment_14')->nullable();
            $table->string('enrollment_requirment_15')->nullable();
            $table->string('enrollment_requirment_16')->nullable();
            $table->string('enrollment_requirment_17')->nullable();
            $table->string('enrollment_requirment_18')->nullable();
            $table->string('enrollment_requirment_19')->nullable();
            $table->string('enrollment_requirment_20')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution_enrollments');
    }
}
