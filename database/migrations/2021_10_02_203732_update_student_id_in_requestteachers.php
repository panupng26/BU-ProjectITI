<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentIdInRequestteachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_teachers', function (Blueprint $table) {
            $table->integer('student1_id')->nullable()->change();
            $table->integer('student2_id')->nullable()->change();
            $table->integer('student3_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_teachers', function (Blueprint $table) {
            $table->integer('student1_id')->change();
            $table->integer('student2_id')->change();
            $table->integer('student3_id')->change();
        });
    }
}
