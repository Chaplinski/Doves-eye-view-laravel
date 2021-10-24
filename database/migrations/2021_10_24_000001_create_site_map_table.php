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
        Schema::create('site_map', function (Blueprint $table) {
            $table->id();
            $table->string('route', 16);
            $table->string('title', 256);
            $table->string('description', 512);
            $table->string('og_title');
            $table->string('og_description');
            $table->string('og_image');
            $table->string('og_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_map');
    }
};
