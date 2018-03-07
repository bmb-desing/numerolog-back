<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('meta');
            $table->string('alias')->unique();
            $table->string('thumbnail')->nullable();
            $table->text('short_text')->nullable();
            $table->text('text');
            $table->boolean('social_network')->default(0);
            $table->boolean('publish')->default(0);
            $table->boolean('telegram_link')->default(0);
            $table->text('telegram_text')->nullable();
            $table->boolean('vk_link')->default(0);
            $table->text('vk_text')->nullable();
            $table->boolean('inst_link')->default(0);
            $table->boolean('inst_text')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('journals');
    }
}
