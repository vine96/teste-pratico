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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            // Navbar
            $table->string('icon_nav')->nullable();
            $table->longText('link_nav_1')->nullable();
            $table->longText('link_nav_2')->nullable();
            $table->longText('link_nav_3')->nullable();

            // Banner
            $table->string('title_banner')->nullable();
            $table->string('btn_banner')->nullable();
            $table->longText('article_banner')->nullable();

            //Centerbar
            $table->string('center_title')->nullable();
            $table->string('center_item_1')->nullable();
            $table->string('center_item_2')->nullable();
            $table->string('center_item_3')->nullable();

            //Firstcard
            $table->string('title_first_card')->nullable();
            $table->longText('article_first_card')->nullable();

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
        Schema::dropIfExists('pages');
    }
};
