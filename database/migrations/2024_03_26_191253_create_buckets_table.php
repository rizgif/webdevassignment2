<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketsTable extends Migration
{
    public function up()
    {
        Schema::create('buckets', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('description')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buckets');
    }
}
;
