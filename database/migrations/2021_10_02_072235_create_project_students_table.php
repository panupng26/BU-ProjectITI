<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_students', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('student1_id','11');
            $table->string('student2_id','11');
            $table->string('student3_id','11');
            $table->integer('advisor_id');
            $table->integer('director1_id');
            $table->integer('director2_id');
            $table->integer('typeproject_id');
            $table->string('name_th')->nullable();
            $table->text('description_th')->nullable();
            $table->string('name_eng')->nullable();
            $table->text('description_eng')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('project_students');
    }
}
