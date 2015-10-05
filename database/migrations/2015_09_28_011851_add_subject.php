<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('subjectCode');
            $table->string('subjectName');
            $table->string('subjectSchedule');
            $table->time('subjectTimeStart');
            $table->time('subjectTimeEnd');
            $table->string('subjectTeacher');
            $table->string('subjectRoom');
            $table->rememberToken();
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
        //
    }
}
