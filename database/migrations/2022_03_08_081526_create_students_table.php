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
            $table->id();
            $table->string('fname',60);
            $table->string('lname',60);
            $table->string('email',60);
            $table->date('dob');
            $table->string('username',60);
            $table->string('password');
            $table->enum('gender',["male","female"]);
            $table->string('age');
            $table->string('state');
            $table->string('city');
            $table->string('fee');
            $table->string('branch',50);
            $table->text('address');
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
    }
}
