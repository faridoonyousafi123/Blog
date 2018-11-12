@extends('layouts.front')


@section('content')

<body class=" ">

    <!-- Header -->



    <!-- ... End Header -->

    <div class="content-wrapper">

        <!-- Stunning Header -->

        <div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">{{$post->title}}</h1>
            </div>
        </div>

        <!-- End Stunning Header -->

        <!-- Post Details -->


        <div class="container">
            <div class="row medium-padding120">
                <main class="main">
                    <div class="col-lg-10 col-lg-offset-1">
                        <article class="hentry post post-standard-details">

                            <div class="post-thumb">
                                <img src="{{$post->featured}}" alt="seo">
                            </div>

                            <div class="post__content">


                                <div class="post-additional-info">

                                    <div class="post__author author vcard">
                                        Posted by

                                        <div class="post__author-name fn">
                                            <a href="#" class="post__author-link">Admin</a>
                                        </div>

                                    </div>

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-20 12:00:00">
                                            {{$post->created_at->toFormattedDateString()}}
                                        </time>

                                    </span>
                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="">{{ $post->category->name }}</a>
                                    </span>

                                </div>

                                <div class="post__content-info">

                                    <p class="post__subtitle">
                                        {{$post->content}}
                                    </p>

                                 
                            </div>

                            <div class="socials">Share:
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-facebook"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-twitter"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-linkedin"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-google-plus"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-pinterest"></i>
                                </a>
                            </div>

                        </article>

                        <div class="blog-details-author">

                            <div class="blog-details-author-thumb">
                                <img height="50" width="50"src="{{asset($post->user->profile->avatar)}}" alt="Author">
                            </div>

                            <div class="blog-details-author-content">
                                <div class="author-info">
                                    <h5 class="author-name">{{$post->user->name}}</h5>
                                    
                                </div>
                                <p class="text">{{$post->user->profile->about}}
                                </p>
                                <div class="socials">

                                    <a href="#" class="social__item">
                                        <img src="app/svg/circle-facebook.svg" alt="facebook">
                                    </a>

                                  

                                    <a href="#" class="social__item">
                                        <img src="app/svg/youtube.svg" alt="youtube">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="pagination-arrow">
                            
                           @if($next)
                            <a href="{{route('post.single',['slug'=>$next->slug])}}" class="btn-next-wrap">
                                <div class="btn-content">
                                    <div class="btn-content-title">Next Post</div>
                                    <p class="btn-content-subtitle">{{$next->title}}</p>
                                </div>
                                <svg class="btn-next">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>
                            </a>
                            @endif

                            @if($prev)

                             <a href="{{route('post.single',['slug'=>$prev->slug])}}" class="btn-prev-wrap">
                                <svg class="btn-prev">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                <div class="btn-content">
                                    <div class="btn-content-title">Previous Post</div>
                                    <p class="btn-content-subtitle">{{$prev->title}}</p>
                                </div>
                            </a>

                            @endif


                        </div>
                        <div class="comments">

                              <div class="heading text-center">
                                    <h4 class="h1 heading-title">Comments</h4>
                                    <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                    </div>
                              </div>

                              @include('include.disqus')
                        </div>
                     

                        <div class="row">

                        </div>


                    </div>

                    <!-- End Post Details -->

                    <!-- Sidebar-->

                    <div class="col-lg-12">
                        <aside aria-label="sidebar" class="sidebar sidebar-right">
                            <div  class="widget w-tags">
                                <div class="heading text-center">
                                    <h4 class="heading-title">ALL BLOG TAGS</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>

                                <div class="tags-wrap">
                                    @foreach($post->tags as $tag)
                                    <a href="#" class="w-tags-item">{{$tag->tag}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>

                    <!-- End Sidebar-->

                </main>
            </div>
        </div>



        @endsection
        <!-- Subscribe Form -->



        <!-- End Subscribe Form -->

    </div>



    <!-- End Footer -->


    <!-- JS Script -->

    <script src="app/js/jquery-2.1.4.min.js"></script>
    <script src="app/js/crum-mega-menu.js"></script>
    <script src="app/js/swiper.jquery.min.js"></script>
    <script src="app/js/theme-plugins.js"></script>
    <script src="app/js/main.js"></script>
    <script src="app/js/form-actions.js"></script>

    <script src="app/js/velocity.min.js"></script>
    <script src="app/js/ScrollMagic.min.js"></script>
    <script src="app/js/animation.velocity.min.js"></script>

    <!-- ...end JS Script -->

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/15_blog_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:10 GMT -->
</html>