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
            'slug' => 'whotoinvite',
            'title' => 'Who Should You Invite to Your Wedding Livestream?',
            'display_date' => 'November 25, 2020',
            'type' => 'Info',
            'image_path' => 'wedding-live-stream-invitation-ideas.jpg',
            'image_alt_text' => 'A blank wedding livestream invitation in a rustic setting.',
        ]);

        DB::table('site_map')->insert(
            array(
                'route' => 'blog/whotoinvite',
                'title' => 'Who Should You Invite to Your Wedding Livestream?',
                'description' => 'Your in-person guestlist has been cut down to include only your closest family and friends, and even though you are making plans today, there’s no assurance that everything will be able to go exactly as planned. Being a couple who got married on October 3rd, 2020, we have lived through your current situation, and we would like to share our experience with you.',
                'og_title' => 'Who Should You Invite to Your Wedding Livestream?',
                'og_description' => 'Your in-person guestlist has been cut down to include only your closest family and friends, and even though you are making plans today, there’s no assurance that everything will be able to go exactly as planned. Being a couple who got married on October 3rd, 2020, we have lived through your current situation, and we would like to share our experience with you.',
                'og_image' => asset('assets/images/custom/wedding-ring-chicago-illinois.jpg'),
                'og_url' => '/blog/whotoinvite',
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
