<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendpepersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendpepers', function (Blueprint $table) {
            $table->id('sendpeper_id');
            $table->integer('typetest_id');
            $table->integer('student_login_id');
            $table->string('linkweb');
            $table->text('description');
            $table->integer('status_peper_id');
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
        Schema::dropIfExists('sendpepers');
    }
}
