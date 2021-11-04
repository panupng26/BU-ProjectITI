<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->integer('status_test1_project1')->nullable()->after('status_project1_id');
            $table->integer('status_test2_project1')->nullable()->after('status_test1_project1');
            $table->integer('status_test1_project2')->nullable()->after('status_project2_id');
            $table->integer('status_test2_project2')->nullable()->after('status_test1_project2');
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
            $table->dropColumn('status_test1_project1');
            $table->dropColumn('status_test2_project1');
            $table->dropColumn('status_test1_project2');
            $table->dropColumn('status_test2_project2');
        });
    }
}
