<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Post::query()->create([
            'slug' => 'sevenreasons',
            'title' => '7 Reasons Why Hiring a Professional Wedding Livestreaming Service Is So Worth It',
            'display_date' => 'October 9, 2020',
            'type' => 'Info',
            'image_path' => 'african-american-bride-smiling.jpg',
            'image_alt_text' => 'African-American bride in Schaumburg wearing red lipstick and smiling while looking at the camera.',
        ]);

        DB::table('site_map')->insert(
            array(
                'route' => 'blog/sevenreasons',
                'title' => '7 Reasons Why Hiring a Professional Wedding Livestreaming Service Is So Worth It',
                'description' => 'We’ve compiled a list of what we have found to be the most important reasons why having a marriage livestream is something that both you and your remote guests will treasure.',
                'og_title' => '7 Reasons Why Hiring a Professional Wedding Livestreaming Service Is So Worth It',
                'og_description' => 'We’ve compiled a list of what we have found to be the most important reasons why having a marriage livestream is something that both you and your remote guests will treasure.',
                'og_image' => asset('assets/images/custom/wedding-ring-chicago-illinois.jpg'),
                'og_url' => '/blog/sevenreasons',
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
        //
    }
};
