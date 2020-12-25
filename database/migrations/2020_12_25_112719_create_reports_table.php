<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Report;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_year')->comment('учебный год');
            $table->integer('semester')->comment('семестр');
            $table->string('discipline')->comment('дисциплина');
            $table->integer('number_of_students')->comment('количество студентов');
            $table->integer('students_five')->comment('студенты с 5');
            $table->integer('students_four')->comment('студенты с 4');
            $table->integer('students_three')->comment('студенты с 3');
            $table->integer('students_two')->comment('студенты с 2');
            $table->integer('percent_five')->comment('процент с 5');
            $table->integer('percent_four')->comment('процент с 4');
            $table->integer('percent_three')->comment('процент с 3');
            $table->integer('percent_two')->comment('процент с 2');
            $table->integer('kpu')->comment('качественный показатель успеваемости');
            $table->integer('pu')->comment('показатель успеваемости');
            $table->integer('sa')->comment('средний балл');
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
        Schema::dropIfExists('reports');
    }
}
