<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('name');
        $table->string('role')->default('user');
        $table->boolean('can_login')->default(false);
        $table->boolean('can_access_transaction')->default(false);
        $table->boolean('can_access_bucket')->default(false);
        $table->boolean('can_access_report')->default(false);
        $table->boolean('is_approved')->default(false);
        $table->rememberToken();
        $table->timestamps(); // This adds created_at and updated_at columns
    });
}



public function down()
{
    Schema::dropIfExists('users');
}


    }

