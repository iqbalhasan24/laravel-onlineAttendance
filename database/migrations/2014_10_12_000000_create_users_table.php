<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->enum('sex',array('male','female'))->default('male');
            $table->string('email')->unique();
            $table->datetime('dob')->nullable();            
            $table->string('department_name')->nullable();
            $table->enum('user_role',array('admin','oparetor','staff'))->default('staff');
            $table->enum('status',array('active','inactive','cancel'))->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('job_id')->unique()->nullable(); // Register Number
            $table->string('common_id')->nullable(); // Router or IP From ISP
            $table->string('local_ip')->unique()->nullable();            
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
        Schema::dropIfExists('users');
    }
}
