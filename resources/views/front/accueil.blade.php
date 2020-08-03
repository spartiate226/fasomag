
@extends('front.socle')
@section('content')


<!-- ##### Header Area Start ##### -->

<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                        <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                        <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                            <a href="#">MAY 8, 2018</a>
                            <a href="archive.html">lifestyle</a>
                        </div>
                        <a href="video-post.html" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                        <a href="video-post.html" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Populaires</h5>
            </div>
            @if(isset($popular))
                @foreach($popular->articles as $popular)
                    <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{$popular->urlToImage}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{$popular->url}}" class="post-title">{{$popular->title}}</a>
                            </div>
                        </div>
                @endforeach
            @endif
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
        </div>


    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Tous sur l'actualite du Burkina Faso</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
                <!-- Single Trending Post -->
                <div class="single-trending-post">
                    <img src="img/bg-img/19.jpg" alt="">
                    <div class="post-content">
                        <a href="#" class="post-cata">Video</a>
                        <a href="video-post.html" class="post-title">Big Savings On Gas While You Travel</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>A la une Nationale</h5>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
                @foreach($Articles as $article)
                <div class="col-12 col-lg-6">
                    <div class="single-blog-post d-flex style-3 mb-30">
                        <div class="post-thumbnail">
                            <img src="" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">{{$article->titre}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>A la une internationnale</h5>
            </div>

            <div class="row">
                @if(isset($top))
                    @foreach($top->articles as $top)
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post d-flex style-3 mb-30">
                                <div class="post-thumbnail">
                                    <img src="{{$top->urlToImage}}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="{{$top->url}}" class="post-title">{{$top->title}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Social Followers Info -->
            <div class="social-followers-info">
                <!-- Facebook -->
                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                <!-- Twitter -->
                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                <!-- YouTube -->
                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> <span>Youtube</span></a>
                <!-- Google -->
                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i><span>Google plus</span></a>
            </div>
        </div>



        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
        </div>


        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Newsletter</h5>
            </div>

            <div class="newsletter-form">
                <p>Abonnes vous a notre newletter pour ne rien rater de l'actualite national et international</p>
                <form action="{{url('newletter')}}" method="POST">
                    @csrf
                    <input type="search" name="email" placeholder="Votre email">
                    <button type="submit" class="btn mag-btn w-100">S'abonner</button>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- ##### Mag Posts Area End ##### -->


@endsection
