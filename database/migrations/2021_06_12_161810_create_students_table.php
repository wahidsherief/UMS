<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('batch_id')->unsigned();
            $table->bigInteger('semester_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('roll_number');
            $table->string('registration_number');
            $table->string('phone');
            $table->text('address');
            $table->longtext('about');
            $table->text('birthday');
            $table->string('gender');
            $table->string('skill');
            $table->string('blood_group');
            $table->string('hsc_gpa');
            $table->string('ssc_gpa');
            $table->string('jsc_gpa');
            $table->string('psc_gpa');
            $table->string('resume')->nullable();

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
        Schema::dropIfExists('students');
    }
}
