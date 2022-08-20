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
            'slug' => 'sendinginvites',
            'title' => 'How To Send Out Livestream Invites: Tips from our Team',
            'display_date' => 'December 16, 2021',
            'type' => 'Info',
            'image_path' => 'wedding-invitation-save-the-date.jpg',
            'image_alt_text' => 'Chicago bride holds zoom wedding invitation for her wedding live stream.',
        ]);

        DB::table('site_map')->insert(
            array(
                'route' => 'blog/sendinginvites',
                'title' => 'How To Send Out Livestream Invites: Tips from our Team',
                'description' => 'Much like choosing the flowers for bouquets or the song for your first dance, there is no one-size-fits-all way to invite guests to a wedding livestream. Our team has compiled four of the most common ways we’ve seen couples invite guests to their wedding livestream.',
                'og_title' => 'How To Send Out Livestream Invites: Tips from our Team',
                'og_description' => 'Much like choosing the flowers for bouquets or the song for your first dance, there is no one-size-fits-all way to invite guests to a wedding livestream. Our team has compiled four of the most common ways we’ve seen couples invite guests to their wedding livestream.',
                'og_image' => asset('assets/images/custom/wedding-ring-chicago-illinois.jpg'),
                'og_url' => '/blog/sendinginvites',
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
