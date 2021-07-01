<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('session_id')->unsigned()->nullable();
            $table->bigInteger('student_id')->unsigned()->nullable();
            $table->bigInteger('semester_id')->unsigned()->nullable();
            $table->bigInteger('course_id')->unsigned()->nullable();
            $table->string('classtest_1');
            $table->string('classtest_2');
            $table->string('classtest_3');
            $table->string('classtest_4');
            $table->string('attendance');
            $table->string('part_a');
            $table->string('part_b');
            $table->string('percentage')->nullable();
            $table->string('n_grade')->nullable();
            $table->string('l_grade')->nullable();
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
        Schema::dropIfExists('results');
    }
}
