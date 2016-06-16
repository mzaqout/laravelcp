<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actionId')->unsigned();
            $table->integer('userId')->unsigned();
            $table->string('ip',15);
            $table->tinyInteger('status');
            $table->integer('visitedId');
            $table->timestamps();
            
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
