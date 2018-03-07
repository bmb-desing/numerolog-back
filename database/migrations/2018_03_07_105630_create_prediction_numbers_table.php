<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredictionNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediction_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prediction_id')->unsigned();
            $table->foreign('prediction_id')
                ->references('id')
                ->on('predictions')
                ->onDelete('cascade');
            $table->string('number');
            $table->text('text')->nullable();
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
        Schema::dropIfExists('prediction_numbers');
    }
}
