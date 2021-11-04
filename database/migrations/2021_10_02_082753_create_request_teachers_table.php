<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_teachers', function (Blueprint $table) {
            $table->id('request_teacher_id');
            $table->integer('student_login_id');
            $table->string('name');
            $table->integer('student1_id');
            $table->integer('student2_id');
            $table->integer('student3_id');
            $table->integer('advisor_id');
            $table->integer('director1_id');
            $table->integer('director2_id');
            $table->text('description');
            $table->integer('status_id')->nullable();
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
        Schema::dropIfExists('request_teachers');
    }
}
