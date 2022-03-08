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
        Schema::create('client_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->boolean('is_wedding');
            $table->string('title_names');
            $table->dateTime('event_start_time');
            $table->string('social_image_location');
            $table->string('youtube_hash');
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
