<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('Roll_no');            
            $table->string('Name');
            $table->string('Branch');
            $table->timestamps();
        });

        Schema::create('student_marks',function (Blueprint $table){
            $table->string('Roll_no');
            $table->string('Marks');
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
        Schema::dropIfExists('students');
        Schema::dropIfExists('student_marks');
    }
}
