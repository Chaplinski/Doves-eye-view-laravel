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
            'slug' => 'usandthem',
            'title' => 'The Difference Between Wedding Videographers and Professional Wedding Livestreaming Services',
            'display_date' => 'September 16, 2021',
            'type' => 'Info',
            'image_path' => 'bride-with-pink-bouquet.jpg',
            'image_alt_text' => 'Bride holds pink bouquet wrapped in white bow during Chicago, Illinois wedding livestream.',
        ]);

        DB::table('site_map')->insert(
            array(
                'route' => 'blog/usandthem',
                'title' => 'The Difference Between Wedding Videographers and Professional Wedding Livestreaming Services',
                'description' => 'We’ve put together some of the key points to consider whether you are looking to hire a wedding videographer, a professional livestreaming company, or maybe even both.',
                'og_title' => 'The Difference Between Wedding Videographers and Professional Wedding Livestreaming Services',
                'og_description' => 'We’ve put together some of the key points to consider whether you are looking to hire a wedding videographer, a professional livestreaming company, or maybe even both.',
                'og_image' => asset('assets/images/custom/wedding-ring-chicago-illinois.jpg'),
                'og_url' => '/blog/usandthem',
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
