<?php

use Illuminate\Database\Migrations\Migration;
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
        DB::table('site_map')->insert(
            array(
                'route' => 'home',
                'title' => 'Dove\'s Eye View - Event Livestream Service',
                'description' => 'We always provide our own internet! 3-camera 720p HD video resolution in real-time. Create and plan your perfect wedding livestream with Dove\'s Eye View.',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service',
                'og_description' => 'Create & plan your perfect wedding livestream with Dove\'s Eye View.',
                'og_image' => 'wedding-ring-chicago-illinois.jpg',
                'og_url' => '/',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'about',
                'title' => 'Dove\'s Eye View - Event Livestream Service',
                'description' => 'Dove\'s Eye View is a husband & wife team that married during the pandemic, just like you. We stream your wedding in 720p HD video resolution in real-time using a 3-camera setup.',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service',
                'og_description' => 'Dove\'s Eye View is a husband & wife team that married during the pandemic, just like you. We stream your wedding in 720p HD video resolution in real-time using a 3-camera setup.',
                'og_image' => 'about-us-1-518x430.jpg',
                'og_url' => '/about',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'faq',
                'title' => 'Dove\'s Eye View - Event Livestream Service FAQ',
                'description' => 'Remote guests do not need Facebook or any other social media account to watch your wedding livestream. Accessing your livestream is as easy as clicking a link.',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service',
                'og_description' => 'Remote guests do not need Facebook or any other social media account to watch your wedding livestream. Accessing your livestream is as easy as clicking a link.',
                'og_image' => 'chicago-wedding-rings.jpg',
                'og_url' => '/faq',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'contact',
                'title' => 'Dove\'s Eye View - Event Livestream Service Contact',
                'description' => 'Serving Chicagoland - Including Kankakee, Joliet, Naperville, and more...',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service Contact',
                'og_description' => 'Serving Chicagoland - Including Kankakee, Joliet, Naperville, and more...',
                'og_image' => 'bridesmaids-on-wedding-day.jpg',
                'og_url' => '/contact',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'service',
                'title' => 'Dove\'s Eye View - Event Livestream Service',
                'description' => 'After your initial consultation we set up your personalized livestream webpage. We can add a digital program of your ceremony, a guest book, Facebook comments, and more. You can see a sample wedding livestream page here.',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service',
                'og_description' => 'Serving Chicagoland - Including Kankakee, Joliet, Naperville, and more...',
                'og_image' => 'congratulations-newly-married-couple.jpg',
                'og_url' => '/service',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'blog',
                'title' => 'Dove\'s Eye View - Event Livestream Service Blog',
                'description' => 'Create & plan your perfect wedding livestream with Dove\'s Eye View.',
                'og_title' => 'Dove\'s Eye View - Wedding Livestream Service Blog',
                'og_description' => 'Create & plan your perfect wedding livestream with Dove\'s Eye View.',
                'og_image' => 'wedding-ring-chicago-illinois.jpg',
                'og_url' => '/blog',
            )
        );

        DB::table('site_map')->insert(
            array(
                'route' => 'highlights',
                'title' => 'Dove\'s Eye View - Livestream Samples',
                'description' => 'Sample footage of events that have been livestreamed by Dove\'s Eye View.',
                'og_title' => 'Dove\'s Eye View - Livestream Samples',
                'og_description' => 'Sample footage of events that have been livestreamed by Dove\'s Eye View.',
                'og_image' => 'wedding-ring-chicago-illinois.jpg',
                'og_url' => '/highlights',
            )
        );
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
