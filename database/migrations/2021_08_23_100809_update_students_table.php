<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->integer('project2_schoolyear_id')->nullable()->after('project1_schoolterm_id');
            $table->integer('project2_schoolterm_id')->nullable()->after('project2_schoolyear_id');
            $table->integer('project1_schoolyear_id')->nullable()->change();
            $table->integer('project1_schoolterm_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('project2_schoolyear_id');
            $table->dropColumn('project2_schoolterm_id');
            $table->integer('project1_schoolyear_id')->change();
            $table->integer('project1_schoolterm_id')->change();
        });
    }
}
