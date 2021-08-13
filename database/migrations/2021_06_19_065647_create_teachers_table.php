<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('teachers_short_name');
            $table->string('status');
            $table->longtext('about')->default(0);
            $table->string('phone');
            $table->string('gender');
            $table->string('blood_group');
            $table->text('address');
            $table->text('masters')->default('Masters Program');
            $table->text('masters_institution')->default(0);
            $table->text('masters_passing_year')->default(0);
            $table->text('masters_gpa')->default(0);
            $table->text('bachelor')->default('Bachelor Program');;
            $table->text('bachelor_institution')->default(0);
            $table->text('bachelor_passing_year')->default(0);
            $table->text('bachelor_gpa')->default(0);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
