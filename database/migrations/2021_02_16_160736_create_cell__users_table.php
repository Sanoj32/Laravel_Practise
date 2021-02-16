<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell__users', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->float('balance');
            $table->unsignedBigInteger('provider');
            $table->timestamps();
            $table->foreign('provider')->references('id')->on('service_providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cell__users');
    }
}
