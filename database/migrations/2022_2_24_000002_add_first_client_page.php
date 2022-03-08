<?php

use App\Models\ClientPage;
use Carbon\Carbon;
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
        $cp = new ClientPage();
        $cp->is_wedding = true;
        $cp->event_start_time = Carbon::parse('2022-02-26 16:00:00');
        $cp->social_image_location = 'rings.jpg';
        $cp->url = 'jim-maria-wedding';
        $cp->youtube_hash = 'hNXikoQ6OgY';
        $cp->title_names = 'Maria and James';
        $cp->save();
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
