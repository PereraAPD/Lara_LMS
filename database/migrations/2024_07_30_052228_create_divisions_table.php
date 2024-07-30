<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('district_id'); 
            $table->string('division_name');
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}
