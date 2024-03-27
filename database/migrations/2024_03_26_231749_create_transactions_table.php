<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->text('description');
            $table->float('amount');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
