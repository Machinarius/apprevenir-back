<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('first_names');
            $table->string('last_names');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->foreignId('education_level_id')->nullable()->constrained('educations_level')->onDelete('set null');
            $table->boolean('is_student')->nullable()->default(0);
            $table->foreignId('gender_id')->nullable()->constrained('genders')->onDelete('set null');
            $table->foreignId('civil_status_id')->nullable()->constrained('civil_statuses')->onDelete('set null');
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
            $table->foreignId('state_id')->nullable()->constrained('states')->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->json('client_config')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
