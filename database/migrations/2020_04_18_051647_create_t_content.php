<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_content', function (Blueprint $table) {
            $table->bigIncrements('id_content');
            $table->string('title');
            $table->string('description');
            $table->string('price');
            $table->string('video');
            $table->dateTime('updloaded');
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
        Schema::dropIfExists('t_content');
    }
}
