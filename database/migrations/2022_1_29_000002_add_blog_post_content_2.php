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
            'display_date' => 'December 16, 2020',
            'type' => 'Info',
            'html_content' => self::content(),
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

    private static function content(): string
    {
        return '<section class="section parallax-container breadcrumb-media-content" data-parallax-img="../../images/custom/blog/guest-list-to-covid-wedding.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">How To Send Out Livestream Invites: Tips from our Team</h2>
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
                <li><span class="icon mdi mdi-clock"></span>December 16, 2020    </li>
                <li><div class="fb-share-button" data-href="https://doveseyeviewstreaming.com/blog/sendinginvites" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdoveseyeviewstreaming.com%2Fblog%2Fsharinginvites&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
              </ul>
              <h3 class="blog-post-title">How To Send Out Livestream Invites: Tips from our Team</h3>
              <div class="blog-post-content">
                  <article class="quote-primary">
                      <div class="quote-primary-body">
                          <div class="quote-primary-text">
                              <p class="q">You’ve made the decision to livestream your wedding, congratulations! Whether your wedding is six days or six months in the future, you’ll have to get the word out to all your family and friends in a timely manner. Much like choosing the flowers for bouquets or the song for your first dance, there is no one-size-fits-all way to invite guests to a wedding livestream. Guests will range widely in age and technological skill, so don’t rule out the option of utilizing multiple methods. Our team has compiled four of the most common ways we’ve seen couples invite guests to their wedding livestream.</p>
                          </div>
                      </div>
                  </article>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5"><img src="/images/custom/blog/bride-and-groom-nuzzle.jpg" alt="Bride and groom nuzzle one another after their Facebook live wedding in Naperville, Illinois." width="518" height="569"/>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <h4 class="blog-post-title">Mention it on the in-person invitation</h4>
                  <div class="blog-post-content">
                      <article class="quote-primary">
                          <div class="quote-primary-body">
                              <div class="quote-primary-text">
                                  <p class="q">In a world where people aren’t able to safely socialize in large groups as frequently, it can feel extra special to get invited to a close friend or family member’s wedding. Still, each guest must individually decide whether to attend in-person or not. For someone who is on the fence about attending in-person, offering them the option to view your wedding remotely will allow them to feel like they are there without putting their own or anyone else’s health and safety at risk. After all, no matter where your guests are in the world, you can have the peace of mind knowing they can show their support from any distance.
                                      <br><br>This is why it is important to include a link to your wedding livestream directly on the invitation you are sending to your in-person guest list. This way they know that they can still be involved in your wedding day even if they cannot be there in person. If you prefer not to mention your livestream on your wedding invitation, you can always include an insert with your in-person wedding invitations that includes the details of your wedding livestream.</p>
                              </div>
                          </div>
                      </article>
                  </div>
              </div>
          </div>
            <div class="row row-50 justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="row row-50">
                        <div style="align-items:center; justify-content:center;" class="col-sm-6 col-lg-12">
                            <img style="margin: auto;" id="myImg02" src="../../images/custom/blog/invitation-to-zoom-wedding-video.png" alt="Sample wedding invitation for people wanting to know how to livestream a wedding on Zoom." width="398" height="283"/>
                            <!-- The Modal -->
                            <div style="z-index: 100;" id="myModal02" class="modal">

                                <!-- The Close Button -->
                                <span class="close" id="close02">&times;</span>

                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img02">

                                <!-- Modal Caption (Image Text) -->
                                <div id="caption02"></div>
                            </div>
                            <p style="text-align: center">Sample In-Person Wedding Invitation That Mentions Livestream Option<br>(Click to enlarge)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-50">
                        <div class="col-sm-6 col-lg-12">
                            <img style="margin: auto;" id="myImg03" src="../../images/custom/blog/covid-wedding-livestream-facebook-live-invitation.png" alt="Covid invitation wording examples for live streaming a wedding on Facebook live." width="398" height="283"/>
                            <!-- The Modal -->
                            <div style="z-index: 100;" id="myModal03" class="modal">

                                <!-- The Close Button -->
                                <span class="close" id="close03">&times;</span>

                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img03">

                                <!-- Modal Caption (Image Text) -->
                                <div id="caption03"></div>
                            </div>
                            <p style="text-align: center">Sample Wedding Livestream Insert<br>(Click to enlarge)</p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row row-50 justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="row row-50">
                        <div class="col-sm-6 col-lg-12">
                            <img id="myImg01" src="../../images/custom/blog/covid-wedding-invitation-idea.jpg" alt="Sample wedding invitation for people wanting to know how to livestream a wedding on Zoom." width="398" height="283"/>
                            <!-- The Modal -->
                            <div style="z-index: 100;" id="myModal01" class="modal">

                                <!-- The Close Button -->
                                <span class="close" id="close01">&times;</span>

                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01">

                                <!-- Modal Caption (Image Text) -->
                                <div id="caption01"></div>
                            </div>
                            <p>Sample Wedding Livestream Invitation (Click to enlarge)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4 class="blog-post-title">Send a separate invitation to the livestream list</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">Online weddings are becoming more and more common, but your virtual wedding invitation doesn’t have to look like all the rest! Because you know these guests won’t be attending in-person, they clearly won’t need to know driving directions to your wedding venue or what hotel you are staying at on your wedding night. Use this option as an opportunity to get creative with the design of the invitation; match the font on the invitation to your wedding colors, use graphics of florals that will be in the real bridal bouquets, or include some favorite photographs of the soon-to-be-married couple.
                                        <br><br>For those who want to do their wedding invitation design themselves, Shutterfly will send you free <a target="_blank" href="https://www.shutterfly.com/wedding/wedding-invitation-samples">wedding invitation samples</a>, and there are more options at Chicago’s own wedding blog <a href="https://chitheewed.com/blog-1/2019/2/21/unique-trendy-forest-save-the-dates-with-basic-invite">Chi Thee Wed</a>.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="blog-post-title">Keep it simple and just post it on Facebook</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">Of all social media platforms, Facebook is the most likely one to be used by both your cousin in high school and your 80-year-old grandmother. Facebook is a quick and easy way to connect with large groups of people with very little effort on your part. Depending on how widely you want to advertise your wedding livestream invitation, you can easily manage the privacy of your Facebook post. Couples with several hundred or thousand Facebook friends may choose to keep this post public, meaning anyone with a link to your Facebook page can access your wedding livestream. On the other hand, couples with smaller guest lists can customize the post to only include a specified group of people on your Facebook friend list.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="blog-post-title">Compose a nice email</h4>
                    <div class="blog-post-content">
                        <article class="quote-primary">
                            <div class="quote-primary-body">
                                <div class="quote-primary-text">
                                    <p class="q">If you and your partner are planning a last-minute wedding, you may not have the time, resources, or energy to do anything but notify guests via a virtual wedding invitation (email). You may already have email addresses for your closest family and friends on hand, or maybe you can work with others in your inner circle who can collect that information for you.
                                        <br><br><i>Do</i> take your time to explain your decision to livestream your big day and express your gratitude for your guests’ support. Don’t forget to compose your livestream invitation email using the blind carbon copy (bcc) feature when sending out the final message. Using bcc means that each guest receives an individual email from you, and if a guest should reply to your email with a question their reply email will only go to you, rather than everyone on your wedding guestlist. For privacy and security reasons, it is always best to use this feature when sending an email to large groups of people.</p>
                                </div>
                            </div>
                        </article>
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
                                    <p class="q">When using Dove’s Eye View you get a completely customizable link to your wedding livestream. Check out our <a href="/sample">sample livestream page</a> to see how you can match the link to your wedding hashtag so that it’s super easy for guests to remember!</p>
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
                  <li><a class="icon icon-sm fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdoveseyeviewstreaming.com%2Fblog%2Fsendinginvites&amp;src=sdkpreparse"></a></li>
                  <li><a class="twitter-share-button icon icon-sm fa-twitter"
                         href="https://twitter.com/intent/tweet"
                         data-text="How To Send Out Livestream Invites: Tips from our Team"
                         data-url="https://doveseyeviewstreaming.com/blog/sendinginvites"
                         data-hashtags="chicagowedding,weddinglivestream,weddingideas"
                         data-via="twitterdev"
                         data-related="twitterapi,twitter">
                      </a></li>
                  <li><script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                      <script type="IN/Share" data-url="https://www.doveseyeviewstreaming.com/blog/sendinginvites"></script></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>';
    }
};
