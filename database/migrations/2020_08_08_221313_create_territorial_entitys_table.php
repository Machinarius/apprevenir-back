<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerritorialEntitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('commune');
            $table->enum('zone_type', ['urbana', 'rural']);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commune_id')->constrained('communes')->onDelete('cascade');
            $table->string('neighborhood');
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
        Schema::dropIfExists('zones');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('communes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Schema::dropIfExists('neighborhoods');
    }
}
