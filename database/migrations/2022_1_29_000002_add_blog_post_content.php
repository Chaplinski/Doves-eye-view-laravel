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
        $post = Post::query()->create([
            'slug' => 'futureofweddings',
            'title' => 'Is Wedding Livestreaming Here To Stay?',
            'display_date' => 'January 18, 2021',
            'type' => 'Wedding',
            'image_path' => 'beach-wedding-chicago.jpg',
            'image_alt_text' => 'Bride holds pink bouquet wrapped in white bow during Chicago, Illinois wedding livestream.',
            'facebook_share_link' => 'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.doveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&src=sdkpreparse',
            'twitter_link' => 'https://twitter.com/intent/tweet?hashtags=chicagowedding%2Cweddinglivestream%2Cweddingideas&original_referer=https%3A%2F%2Fdoveseyeviewstreaming.com%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Eshare%7Ctwgr%5E&related=twitterapi%2Ctwitter&text=Is%20Wedding%20Livestreaming%20Here%20To%20Stay%3F&url=https%3A%2F%2Fdoveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&via=twitterdev',
            'linkedin_link' => 'https://www.linkedin.com/cws/share/?url=https%3A%2F%2Fwww.doveseyeviewstreaming.com%2Fblog%2Ffutureofweddings&xdOrigin=https%3A%2F%2Fdoveseyeviewstreaming.com&xdChannel=2b7cd411-ca32-478b-9303-78782f3b3a1f&xd_origin_host=https%3A%2F%2Fdoveseyeviewstreaming.com',
        ]);

        self::content($post->id);

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



    private static function content(int $post_id): void
    {
        PostSection::query()->create([
            'post_id' => $post_id,
            'header' => 'Is Wedding Livestreaming Here To Stay?',
            'image_path' => 'firework-hearts.jpg',
            'sort_order' => 1,
            'type' => PostSectionType::BANNER_HEADER
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'header' => 'Is Wedding Livestreaming Here To Stay?',
            'content' => 'In the last year, many aspects of wedding planning have changed. Couples are no longer able to have guest lists ranging in the hundreds of people, and most wedding guests are unable to travel across the country for a wedding. Some wedding guests who live in-town are also unable to attend a wedding in person due to complications of the pandemic. None of this means that you are unloved, nor does it mean that your family and friends do not wish to be there. In most situations your loved ones are sick to their stomach knowing that they cannot physically be there for you on your wedding day. This is why having a wedding livestream is now more important than ever.',
            'sort_order' => 2,
            'type' => PostSectionType::TITLE_H2_FULL_TEXT
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'image_path' => 'covid-wedding-videography.jpg',
            'image_alt_text' => 'Masked couple gets married during a pandemic in Chicago, Illinois',
            'sort_order' => 3,
            'type' => PostSectionType::FULL_WIDTH_PIC,
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'content' => 'In the past, a wedding livestream was perfect for destination weddings. Where only a small number of people could afford to travel to a destination wedding, adding a professional wedding livestream was the perfect way to make sure everyone was included, no matter what their financial or travel situation may be.<br><br>These days lots of young people move from city to city, and in the process make a few very good friends who are also in the period of their life where they are experiencing life in several different cities. When sending out wedding invitations you are likely sending them to friends in multiple cities, states, and even countries. Much like with a destination wedding, couples who have friends all over the country and the world are rarely able to have everyone on their guest list actually make it to their wedding ceremony.',
            'sort_order' => 4,
            'type' => PostSectionType::TEXT_NO_HEAD
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'content' => 'Being a wedding guest comes with obligations. The two biggest obligations are the need to request time off work and the need to save quite a bit of money for a long weekend to attend a friend or family member’s wedding. For people who can’t afford the time off or the travel expenses, having the wedding couple add a professional wedding livestreaming company to their list of vendors is a God-send. This means that people who really truly love the wedding couple, but have their own personal and work limitations, can still be included. Not only is this nice for the soon-to-be-newlyweds, but words cannot express the joy and relief that your loved ones will feel when they know they can watch you say “I do” in real-time from wherever on the planet they may be.<br><br>Couples are initially bummed that their guest lists have been shrunk, but if you ask those same couples how their intimate wedding went most of them would tell you it was extra special because they didn’t have to spend their entire wedding making sure they talked to every one of their hundreds of guests.',
            'image_path' => 'wedding-livestream-services.jpg',
            'image_alt_text' => 'Livestreaming your wedding in the Chicagoland area allows all your friends and family to be included in your big day',
            'sort_order' => 5,
            'type' => PostSectionType::PIC_LEFT_COL_LG_4
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'title' => 'How Dove’s Eye View Makes Sharing Your Wedding Livestream a Breeze',
            'content' => 'Dove’s Eye View helps you share your nuptials with all of your loved ones, without needing to personally interact with every single person on your wedding day. When you have friends and family who have flown in from all over the country and world there is an expectation that you spend some time with every single one of them. Rather than getting pulled in a hundred different directions, Dove’s Eye View makes it so that you can share your wedding ceremony with everyone who is important to you, and then you can spend the rest of your day with your wedding party cutting a rug on the dance floor!',
            'sort_order' => 6,
            'type' => PostSectionType::H3_FULL_WIDTH_TEXT
        ]);

        PostSection::query()->create([
            'post_id' => $post_id,
            'sort_order' => 7,
            'type' => PostSectionType::TEXT_NO_HEAD
        ]);
    }
};
