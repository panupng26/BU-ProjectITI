<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSchoolyearIdToProject1SchoolyearIdInStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('schoolyear_id','project1_schoolyear_id');
            $table->renameColumn('schoolterm_id','project1_schoolterm_id');
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
            $table->renameColumn('project1_schoolyear_id','schoolyear_id');
            $table->renameColumn('project1_schoolterm_id','schoolterm_id');
        });
    }
}
