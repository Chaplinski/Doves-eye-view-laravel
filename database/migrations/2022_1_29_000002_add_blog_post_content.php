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
            'slug' => 'futureofweddings',
            'title' => 'Is Wedding Livestreaming Here To Stay?',
            'display_date' => 'January 18, 2021',
            'type' => 'Wedding',
            'html_content' => self::content(),
            'image_path' => 'beach-wedding-chicago.jpg',
            'image_alt_text' => 'Bride holds pink bouquet wrapped in white bow during Chicago, Illinois wedding livestream.',
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

    private static function content(): string
    {
        return '<section class="section parallax-container breadcrumb-media-content" data-parallax-img="../../images/custom/blog/firework-hearts.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Is Wedding Livestreaming Here To Stay?</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12 order-lg-2">
                    <ul class="blog-post-meta">
                        <li><a class="badge" href="/blog">Wedding</a></li>
                        <li><span class="icon mdi mdi-clock"></span>January 18, 2021    </li>
                        <li><div class="fb-share-button" data-href="https://www.doveseyeviewwedding.com/blog/futureofweddings" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.doveseyeviewwedding.com%2Fblog%2Ffutureofweddings&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                    </ul>
                    <h2 class="blog-post-title">Is Wedding Livestreaming Here To Stay?</h2>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">In the last year, many aspects of wedding planning have changed. Couples are no longer able to have guest lists ranging in the hundreds of people, and most wedding guests are unable to travel across the country for a wedding. Some wedding guests who live in-town are also unable to attend a wedding in person due to complications of the pandemic. None of this means that you are unloved, nor does it mean that your family and friends do not wish to be there. In most situations your loved ones are sick to their stomach knowing that they cannot physically be there for you on your wedding day. This is why having a wedding livestream is now more important than ever.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
          <div class="row">
            <div class="col-12"><img src="/images/custom/blog/covid-wedding-videography.jpg" alt="Masked couple gets married during a pandemic in Chicago, Illinois" width="1170" height="456"/>
            </div>
          </div>
          <div class="row row-50">
            <div class="col-lg-12 order-lg-2">
              <div class="blog-post-content">
                <article class="quote-primary">
                  <div class="quote-primary-body">
                    <div class="quote-primary-text">
                      <p class="q">In the past, a wedding livestream was perfect for destination weddings. Where only a small number of people could afford to travel to a destination wedding, adding a professional wedding livestream was the perfect way to make sure everyone was included, no matter what their financial or travel situation may be.</p>
                      <p class="q">These days lots of young people move from city to city, and in the process make a few very good friends who are also in the period of their life where they are experiencing life in several different cities. When sending out wedding invitations you are likely sending them to friends in multiple cities, states, and even countries. Much like with a destination wedding, couples who have friends all over the country and the world are rarely able to have everyone on their guest list actually make it to their wedding ceremony.</p>

                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>


          <div class="row row-50">
            <div class="col-lg-8 order-lg-2">
              <div class="blog-post-content">
                <article class="quote-primary">
                  <div class="quote-primary-body">
                    <div class="quote-primary-text">
                        <p class="q">Being a wedding guest comes with obligations. The two biggest obligations are the need to request time off work and the need to save quite a bit of money for a long weekend to attend a friend or family member’s wedding. For people who can’t afford the time off or the travel expenses, having the wedding couple add a professional wedding livestreaming company to their list of vendors is a God-send. This means that people who really truly love the wedding couple, but have their own personal and work limitations, can still be included. Not only is this nice for the soon-to-be-newlyweds, but words cannot express the joy and relief that your loved ones will feel when they know they can watch you say “I do” in real-time from wherever on the planet they may be.</p>
                        <p class="q">Couples are initially bummed that their guest lists have been shrunk, but if you ask those same couples how their intimate wedding went most of them would tell you it was extra special because they didn’t have to spend their entire wedding making sure they talked to every one of their hundreds of guests.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <div class="row row-50">
                <div class="col-sm-6 col-lg-12"><img src="/images/custom/blog/wedding-live-stream-services.jpg" alt="Livestreaming your wedding in the Chicagoland area allows all your friends and family to be included in your big day" width="398" height="581"/>
                </div>
              </div>
            </div>
          </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="blog-post-title">How Dove’s Eye View Makes Sharing Your Wedding Livestream a Breeze </h3>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">Dove’s Eye View helps you share your nuptials with all of your loved ones, without needing to personally interact with every single person on your wedding day. When you have friends and family who have flown in from all over the country and world there is an expectation that you spend some time with every single one of them. Rather than getting pulled in a hundred different directions, Dove’s Eye View makes it so that you can share your wedding ceremony with everyone who is important to you, and then you can spend the rest of your day with your wedding party cutting a rug on the dance floor!</p>

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
                  <li><a class="icon icon-sm fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.doveseyeviewwedding.com%2Fblog%2Ffutureofweddings&amp;src=sdkpreparse"></a></li>
                  <li><a class="twitter-share-button icon icon-sm fa-twitter"
                         href="https://twitter.com/intent/tweet"
                         data-text="Is Wedding Livestreaming Here To Stay?"
                         data-url="https://doveseyeviewwedding.com/blog/futureofweddings"
                         data-hashtags="chicagowedding,weddinglivestream,weddingideas"
                         data-via="twitterdev"
                         data-related="twitterapi,twitter">
                      </a></li>
                  <li><script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                      <script type="IN/Share" data-url="https://www.doveseyeviewwedding.com/blog/futureofweddings"></script></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>';
    }
};
