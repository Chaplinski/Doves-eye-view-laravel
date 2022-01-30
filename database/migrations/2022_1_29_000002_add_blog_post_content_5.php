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
            'display_date' => 'September 16, 2020',
            'type' => 'Info',
            'html_content' => self::content(),
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

    private static function content(): string
    {
        return '<section class="section parallax-container breadcrumb-media-content" data-parallax-img="../../images/custom/blog/fieldsofgold.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">The Difference Between Wedding Videographers and Professional Wedding Livestreaming Services</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 justify-content-lg-between">
            <div class="col-lg-6">
              <ul class="blog-post-meta">
                <li><a class="badge" href="/blog">Info</a></li>
                <li><span class="icon mdi mdi-clock"></span>September 16, 2020    </li>
                <li><div class="fb-share-button" data-href="https://doveseyeviewwedding.com/blog/usandthem" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdoveseyeviewwedding.com%2Fblog%2Fusandthem&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
              </ul>
              <h3 class="blog-post-title">The Difference Between Videography and Wedding Livestreaming</h3>
              <div class="blog-post-content">
                  <article class="quote-primary">
                      <div class="quote-primary-body">
                          <div class="quote-primary-text">
                              <p class="q">Being able to share your wedding with loved ones around the world is more important now than it ever has been. Although the idea of having a video production of your wedding goes back several decades, having a livestream has become the most important modern component to having a wedding. We’ve put together some of the key points to consider whether you are looking to hire a wedding videographer, a professional livestreaming company, or maybe even both.</p>
                          </div>
                      </div>
                  </article>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5"><img src="/images/custom/blog/bride-groom-wedding-dance.jpg" alt="Bride and groom have wedding dance in field near Chicago, Illinois." width="518" height="569"/>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <h4 class="blog-post-title">Why have a wedding livestream?</h4>
                <div class="blog-post-content">
                    <article class="quote-primary">
                        <div class="quote-primary-body">
                            <div class="quote-primary-text">
                                <p class="q">At this point I am sure your question is “if I am already hiring a wedding videographer, what would I need someone to livestream my wedding for?” If your videographer also offers livestreaming services for no extra fee then I’d say that you are sitting pretty and probably don’t need to continue to read this blog post. However, if you want to share the biggest moment of your life in real-time with your loved ones, and as a result instantly have a full-length HD multi-camera video of your wedding, then do read on.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
          </div>
            <div class="row row-50 justify-content-lg-between">
                <div class="col-lg-3"><img src="/images/custom/blog/wedding-dress-zoom-videography.jpg" alt="Bride and groom share their wcovid wedding ideas on their Zoom live stream wedding." width="270" height="296"/>
                </div>
                <div class="col-lg-9">
                    <h4 class="blog-post-title">What Services Would I Get From Dove’s Eye View?</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">A professional wedding livestream is just what it sounds like. Your life will be streamed directly into the homes and hearts of those who you hold dear. Your remote wedding guests will truly be able to share in your big day, as you will have your own custom wedding livestream webpage, complete with a digital wedding program, so not a single one of your guests miss a beat. You also have the option to include the ability for remote wedding guests to leave Facebook comments directly on your wedding livestream page so that your remote guests can enjoy your wedding in real time together.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-8">
                    <h4 class="blog-post-title">What’s the difference?</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">Our wedding livestreams are shot with 720p HD video quality. It’s no secret that some wedding videographers record in 4K these days, which is four times the pixel resolution of HD. However, due to the volatility of internet upload speeds and constant fluctuations in internet network traffic it is unlikely that anyone will be able to offer wedding livestreaming with a resolution higher than 720p HD anytime soon, at least without an astronomical price tag.
                                    <br><br>With a wedding videographer you get a highlight reel and wedding video for later on, and with a wedding livestreaming service you get a still high quality video, immediately delivered to the eyes and ears of your friends and family. Friends, family, and even the bride and groom can watch your wedding ceremony a day, or even just an hour after the ceremony ends. We’ve had couples tell us that their family members who were in school or at work during their wedding ceremony were still able to watch the livestream a couple hours after the ceremony, making them feel included in their family member’s big day. Also, if you want to show off all of your wedding reception ideas and decorations to your remote guests then wedding livestream services might be more up your alley than a wedding videographer.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-lg-4"><img style="padding-top:50px;" src="/images/custom/blog/chicago-illinois-wedding-videography.jpg" alt="A newly married couple in Joliet, Illinois as they show you how to livestream a wedding on Facebook." width="369" height="406"/>
                    <p>A videographer needs time to create your video while a livestream is instant and is immediately digitally archived for you.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="blog-post-title">Anything else?</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">At Dove’s Eye View, we provide you with your own personalized wedding livestream webpage, which includes your embedded livestream, a digital version of your wedding program right on the page, and the option to add Facebook comments or a chat feature. As a quality control we provide our own 4G LTE hotspot for every wedding we livestream and we arrive over an hour early to set up, network, and test our equipment. We also work with your venue to establish the best shots available and to provide your remote wedding guests with an audio feed directly from your wedding venue’s soundboard.
                                        <br /><br />As far as workload goes, a truly professional wedding livestreamer would end up putting in a similar amount of work as a wedding videographer when bringing your wedding vision to fruition. Both jobs require expensive equipment, skilled labor, and experience. With a wedding videographer most of the work comes after the wedding, in the form of editing video. With Dove’s Eye View and other professional wedding livestreaming services a lot of the work comes ahead of time, in the form of creating and managing your personalized wedding livestream page and working with your wedding venue, their audio technician, and anyone else we may need to coordinate your wedding livestream with.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-12">
              <div class="blog-post-share text-lg-right">
                <ul class="list-inline">
                  <li class="thin-title">Share post</li>
                  <li><a class="icon icon-sm fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdoveseyeviewwedding.com%2Fblog%2Fusandthem&amp;src=sdkpreparse"></a></li>
                  <li><a class="twitter-share-button icon icon-sm fa-twitter"
                         href="https://twitter.com/intent/tweet"
                         data-text="The Difference Between Videographers and Livestreaming Services"
                         data-url="https://doveseyeviewwedding.com/blog/usandthem"
                         data-hashtags="chicagowedding,weddinglivestream,weddingideas"
                         data-via="twitterdev"
                         data-related="twitterapi,twitter">
                      </a></li>
                  <li><script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                      <script type="IN/Share" data-url="https://www.doveseyeviewwedding.com/blog/usandthem"></script></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>';
    }
};
