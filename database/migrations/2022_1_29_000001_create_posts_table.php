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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->string('display_date')->default('January 1, 2022');
            $table->string('type');
            $table->longText('html_content');
            $table->string('image_path');
            $table->string('image_alt_text')->nullable();
            $table->integer('category_sort_order')->nullable();
            $table->integer('main_sort_order')->nullable();
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
};
