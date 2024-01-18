<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->string('email', 60)->unique('email');
            $table->string('password', 100);
            $table->enum('role', ['admin', 'user']);
            $table->string('image', 50)->default('blank_profile.webp');
            $table->integer('student_id');
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
};
