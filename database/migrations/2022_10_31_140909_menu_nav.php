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
        Schema::create('menu_nav', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->string('type');
            $table->string('badge_value')->nullable();
            $table->boolean('active');
            $table->integer('order');
            $table->integer('with_list')->default(false);
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
        Schema::dropIfExists('menu_nav');
    }
};
