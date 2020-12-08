<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedBigInteger('isAdmin')->nullable();
            $table->unsignedBigInteger('isTeacher')->nullable();
            $table->unsignedBigInteger('isStudent')->nullable();
            $table->foreign('isAdmin')->references('id')->on('admins')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('isTeacher')->references('id')->on('teachers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('isStudent')->references('id')->on('students')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
