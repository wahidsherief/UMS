<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchdesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchdesigns', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->bigInteger('semester_id')->unsigned()->nullable();
            $table->bigInteger('course_id')->unsigned()->nullable();
            $table->bigInteger('activity_id')->unsigned()->nullable();
            $table->bigInteger('teacher_internal_id')->unsigned()->nullable();
            $table->bigInteger('teacher_external_id')->unsigned()->nullable();

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
        Schema::dropIfExists('batchdesigns');
    }
}
