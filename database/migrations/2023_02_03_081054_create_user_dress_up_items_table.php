<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dress_up_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_dress_up_id');
            $table->unsignedBigInteger('item_id');
            $table->foreign('user_dress_up_id')->references('id')->on('user_dress_ups')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
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
        Schema::dropIfExists('user_dress_up_items');
    }
};
