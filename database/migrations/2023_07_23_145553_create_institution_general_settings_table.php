<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('institution_logo')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('institution_year_of_starting')->nullable();
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
        Schema::dropIfExists('institution_general_settings');
    }
}
