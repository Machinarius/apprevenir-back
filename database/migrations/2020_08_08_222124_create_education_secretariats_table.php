<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationSecretariatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('educational_institution');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('educational_institution_id')->constrained('educational_institutions')->onDelete('cascade');
            $table->string('grade');
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
        Schema::dropIfExists('educational_institutions');
        Schema::dropIfExists('grades');
    }
}
