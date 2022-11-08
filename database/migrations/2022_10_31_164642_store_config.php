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
        Schema::create('store_config', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('shop_logo');
            $table->string('shop_theme')->default('theme-color-1');
            $table->string('shop_country')->default('Maroc');
            $table->string('shop_city')->nullable();
            $table->string('shop_long_desc')->nullable();
            $table->string('shop_short_desc')->nullable();
            $table->string('shop_address')->nullable();
            $table->string('shop_phone')->nullable();
            $table->string('shop_whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('shop_facebookb_link')->nullable();
            $table->string('shop_twitter_link')->nullable();
            $table->string('shop_instgram_link')->nullable();
            $table->string('shop_lang')->default('fr');
            $table->string('shop_currency')->default('DH');
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
        Schema::dropIfExists('store_config');

    }
};
