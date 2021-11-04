<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentidInProjectStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_students', function (Blueprint $table) {
            $table->string('student1_id','11')->nullable()->change();
            $table->string('student2_id','11')->nullable()->change();
            $table->string('student3_id','11')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_students', function (Blueprint $table) {
            $table->string('student1_id','11')->change();
            $table->string('student2_id','11')->change();
            $table->string('student3_id','11')->change();
        });
    }
}
