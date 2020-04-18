<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_user');
            $table->string('math');
            $table->string('payment_math_date');
            $table->string('sciene');
            $table->string('payment_science_date');
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
        Schema::dropIfExists('t_payment');
    }
}
