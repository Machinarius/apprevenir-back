<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestAddictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_addiction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('tests');
            $table->foreignId('addiction_id')->constrained('addictions');
            $table->foreignId('test_information_id')->constrained('test_informations');
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
        Schema::dropIfExists('test_addiction');
    }
}
