<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSujetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujets', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('titre');
            $table->string('description');
            $table->integer('jeux_id')->unsigned();
            $table->foreign('jeux_id')->references('id')->on('jeuxs');
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
        //
    }
}
