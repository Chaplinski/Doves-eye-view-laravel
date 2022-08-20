@extends('layouts.app')
@section('content')
    <section class="section parallax-container breadcrumb-media-content" data-parallax-img="{{asset('assets/images/custom/blog/wedding-photography-price-chicago.jpg')}}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-70 justify-content-xl-between">
                <div class="col-lg-8">
                    <div class="row row-50 justify-content-center">

                        @foreach($posts as $post)
                            <div class="col-md-6">
                                <div class="post-classic">
                                    <div class="post-classic-figure"><a href="/blog/{{ $post->slug }}"><img src="{{ asset('assets/images/custom/blog/' . $post->image_path) }}" alt="{{ $post->image_alt_text }}" width="370" height="255"/></a></div>
                                    <div class="post-classic-caption">
                                        <h4 class="post-classic-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                        <ul class="post-classic-meta">
                                            <li>{{ $post->display_date }}</li>
                                            <li><a class="post-classic-tag-secondary-2 post-classic-tag" href="/blog/{{ $post->slug }}">{{ $post->type }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if($posts->count() % 2 === 1)
                                <div class="col-md-6">
                                </div>
                        @endif
                        <!--                 Bootstrap Pagination-->
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-classic">
                                @for($i = 1; $i <= $posts->lastPage(); $i++)
                                    @if($i === $posts->currentPage())
                                        <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="block-aside-item">
                        <h5 class="block-aside-title">Top Posts</h5>
                        <div class="post-minimal">
                            <h5 class="post-minimal-title"><a href="/blog/sendinginvites">How To Send Out Livestream Invites: Tips from our Team</a></h5>
                            <p class="post-minimal-date">December 16, 2021</p>
                        </div>
                        <div class="post-minimal">
                            <h5 class="post-minimal-title"><a href="/blog/sevenreasons">7 Reasons Why Hiring a Professional For Your Livestream Is So Worth It</a></h5>
                            <p class="post-minimal-date">October 9, 2021</p>
                        </div>
                        <div class="post-minimal">
                            <h5 class="post-minimal-title"><a href="/blog/whotoinvite">Who Should You Invite to Your Wedding Livestream?</a></h5>
                            <p class="post-minimal-date">November 25, 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
