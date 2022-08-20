<?php

use App\Models\Post;
use App\Models\PostSection;
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
            'slug' => 'futureofweddings',
            'title' => 'Is Wedding Livestreaming Here To Stay?',
            'display_date' => 'January 18, 2022',
            'type' => 'Wedding',
            'image_path' => 'beach-wedding-chicago.jpg',
            'image_alt_text' => 'Bride holds pink bouquet wrapped in white bow during Chicago, Illinois wedding livestream.',
            'facebook_share_link' => 'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.doveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&src=sdkpreparse',
            'twitter_link' => 'https://twitter.com/intent/tweet?hashtags=chicagowedding%2Cweddinglivestream%2Cweddingideas&original_referer=https%3A%2F%2Fdoveseyeviewstreaming.com%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&related=twitterapi%2Ctwitter&text=Is%20Wedding%20Livestreaming%20Here%20To%20Stay%3F&url=https%3A%2F%2Fdoveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&via=twitterdev',
            'linkedin_link' => 'https://www.linkedin.com/cws/share/?url=https%3A%2F%2Fwww.doveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&xdOrigin=https%3A%2F%2Fdoveseyeviewstreaming.com&xdChannel=2b7cd411-ca32-478b-9303-78782f3b3a1f&xd_origin_host=https%3A%2F%2Fdoveseyeviewstreaming.com',
        ]);

        DB::table('site_map')->insert(
            array(
                'route' => 'blog/futureofweddings',
                'title' => 'Is Wedding Livestreaming Here To Stay?',
                'description' => 'In most situations your loved ones are sick to their stomach knowing that they cannot physically be there for you on your wedding day. This is why having a wedding livestream is now more important than ever.',
                'og_title' => 'Is Wedding Livestreaming Here To Stay?',
                'og_description' => 'In most situations your loved ones are sick to their stomach knowing that they cannot physically be there for you on your wedding day. This is why having a wedding livestream is now more important than ever.',
                'og_image' => asset('assets/images/custom/wedding-ring-chicago-illinois.jpg'),
                'og_url' => '/blog/futureofweddings',
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
