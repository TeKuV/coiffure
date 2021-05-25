<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoiffuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coiffures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_post');
            $table->unsignedInteger('id_promotion')->nullable();
            
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_promotion')->references('id')->on('promotions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('coiffures');
    }
}
