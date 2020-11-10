<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');
            $table->foreignId('information_level_id')->constrained('information_levels')->onDelete('cascade');
            $table->foreignId('difficulty_level_id')->constrained('difficulty_levels')->onDelete('cascade');
            $table->string('url_video');
            $table->text('professional_help');
            $table->string('url_interest');
            $table->integer('min');
            $table->integer('max');
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
        Schema::dropIfExists('test_informations');
    }
}
