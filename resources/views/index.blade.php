@extends('master')

@section('content')
    <section class="hero-area" id="home">
        <div class="container">
            <div class="hero-area-slider">
                <div class="row hero-area-slide">
                    <div class="col-lg-6 col-md-5">
                        <div class="hero-area-content">
                            <img src="{{ url('uploadedimgs/' . $movies[1]->movieImage) }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="hero-area-content pr-50">
                            <h2>{{ $movies[1]->movieName }}</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                            <p>{{ $movies[1]->movieDescription }}</p>
                            <h3>Cast:</h3>
                            <div class="slide-cast">
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast1.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast2.htm' }}l" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast3.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast4.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast5.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast6.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="{{ '/img/cast/cast7.png' }}" alt="about" />
                                </div>
                                <div class="single-slide-cast text-center">
                                    5+
                                </div>
                            </div>
                            <div class="slide-trailor">
                                <h3>Watch Trailer</h3>
                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i>
                                    Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hero-area-slide">
                    <div class="col-lg-6 col-md-5">
                        <div class="hero-area-content">
                            <img src="{{ url('uploadedimgs/' . $movies[0]->movieImage) }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="hero-area-content pr-50">
                            <h2>{{ $movies[0]->movieName }}</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                            <p>{{ $movies[0]->movieDescription }}</p>
                            <h3>Cast:</h3>
                            <div class="slide-cast">
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast1.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast2.html" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast3.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast4.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast5.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast6.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast7.png" alt="about" />
                                </div>
                                <div class="single-slide-cast text-center">
                                    5+
                                </div>
                            </div>
                            <div class="slide-trailor">
                                <h3>Watch Trailer</h3>
                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i>
                                    Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hero-area-slide">
                    <div class="col-lg-6 col-md-5">
                        <div class="hero-area-content">
                            <img src="{{ url('uploadedimgs/' . $movies[2]->movieImage) }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="hero-area-content pr-50">
                            <h2>{{ $movies[2]->movieName }}</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                            <p>{{ $movies[2]->movieDescription }}</p>
                            <h3>Cast:</h3>
                            <div class="slide-cast">
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast1.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast2.html" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast3.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast4.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast5.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast6.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast7.png" alt="about" />
                                </div>
                                <div class="single-slide-cast text-center">
                                    5+
                                </div>
                            </div>
                            <div class="slide-trailor">
                                <h3>Watch Trailer</h3>
                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i>
                                    Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-area-thumb">
                <div class="thumb-prev">
                    <div class="row hero-area-slide">
                        <div class="col-lg-6">
                            <div class="hero-area-content">
                                <img src="{{ url('uploadedimgs/' . $movies[2]->movieImage) }}" alt="about" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-area-content pr-50">
                                <h2>{{ $movies[2]->movieName }}</h2>
                                <div class="review">
                                    <div class="author-review">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4>180k voters</h4>
                                </div>
                                <p>{{ $movies[2]->movieDescription }}</p>
                                <h3>Cast:</h3>
                                <div class="slide-cast">
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast1.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast2.html" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast3.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast4.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast5.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast6.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast7.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast text-center">
                                        5+
                                    </div>
                                </div>
                                <div class="slide-trailor">
                                    <h3>Watch Trailer</h3>
                                    <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i>
                                        Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumb-next">
                    <div class="row hero-area-slide">
                        <div class="col-lg-6">
                            <div class="hero-area-content">
                                <img src="{{ url('uploadedimgs/' . $movies[0]->movieImage) }}" alt="about" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-area-content pr-50">
                                <h2>{{ $movies[0]->movieName }}</h2>
                                <div class="review">
                                    <div class="author-review">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4>180k voters</h4>
                                </div>
                                <p>{{ $movies[0]->movieName }}</p>
                                <h3>Cast:</h3>
                                <div class="slide-cast">
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast1.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast2.html" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast3.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast4.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast5.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast6.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast">
                                        <img src="assets/img/cast/cast7.png" alt="about" />
                                    </div>
                                    <div class="single-slide-cast text-center">
                                        5+
                                    </div>
                                </div>
                                <div class="slide-trailor">
                                    <h3>Watch Trailer</h3>
                                    <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i>
                                        Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- hero area end -->
    <!-- portfolio section start -->
    <section class="portfolio-area pt-60">
        <div class="container">
            <div class="row flexbox-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class="section-title">
                        <h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="portfolio-menu">
                        <ul>
                            <li data-filter="*" class="active">Latest</li>
                            <li data-filter=".soon">Comming Soon</li>
                            <li data-filter=".top">Top Rated</li>
                            <li data-filter=".released">Recently Released</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-9">
                    <div class="row portfolio-item">
                       
                        @foreach ($upcomingmovies as $item)
                            
                            <div class="col-md-4 col-sm-6 released">
                                <div class="single-portfolio">
                                    <div class="single-portfolio-img">
                                        <img src="{{ url('uploadedimgs/' . $item->movieImage) }}" alt="portfolio" style="height: 400px;" />
                                        <a href="{{ $item->movieTrailer }}" class="popup-youtube">
                                            <i class="icofont icofont-ui-play"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2>{{ $item->movieName }}</h2>
                                        <div class="review">
                                            <div class="author-review">
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4>180k voters</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        @foreach($upcomingmoviessoon as $item)
                            <div class="col-md-4 col-sm-6 soon">
                                <div class="single-portfolio">
                                    <div class="single-portfolio-img">
                                        <img src="{{ url('uploadedimgs/' . $item->movieImage) }}" alt="portfolio" style="height: 400px;" />
                                        <a href="{{ $item->movieTrailer }}" class="popup-youtube">
                                            <i class="icofont icofont-ui-play"></i>
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h2>{{ $item->movieName }}</h2>
                                        <div class="review">
                                            <div class="author-review">
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4>180k voters</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="portfolio-sidebar">
                        <img src="{{url('img/sidebar/sidebar1.png')}}" alt="sidebar" />
                        <img src="{{url('img/sidebar/sidebar2.png')}}" alt="sidebar" />
                        <img src="{{url('img/sidebar/sidebar3.png')}}" alt="sidebar" />
                        <img src="{{url('img/sidebar/sidebar4.png')}}" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- portfolio section end -->
    <!-- video section start -->
    <section class="video ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-20">
                        <h1><i class="icofont icofont-film"></i> Trailers & Videos</h1>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-9">
                    <div class="video-area">
                        <img src="assets/img/video/video1.png" alt="video" />
                        <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                            <i class="icofont icofont-ui-play"></i>
                        </a>
                        <div class="video-text">
                            <h2>Angle of Death</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <div class="video-area">
                                <img src="assets/img/video/video2.png" alt="video" />
                                <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="video-area">
                                <img src="assets/img/video/video3.png" alt="video" />
                                <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                    <i class="icofont icofont-ui-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- video section end -->
    <!-- news section start -->
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-20">
                        <h1><i class="icofont icofont-coffee-cup"></i> Latest News</h1>
                    </div>
                </div>
            </div>
            <hr />
        </div>
        <div class="news-slide-area">
            <div class="news-slider">
                <div class="single-news">
                    <div class="news-bg-1"></div>
                    <div class="news-date">
                        <h2><span>NOV</span> 25</h2>
                        <h1>2017</h1>
                    </div>
                    <div class="news-content">
                        <h2>The Witch Queen</h2>
                        <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her
                            hat, and teal eyes.</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
                <div class="single-news">
                    <div class="news-bg-2"></div>
                    <div class="news-date">
                        <h2><span>NOV</span> 25</h2>
                        <h1>2017</h1>
                    </div>
                    <div class="news-content">
                        <h2>The Witch Queen</h2>
                        <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her
                            hat, and teal eyes.</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
                <div class="single-news">
                    <div class="news-bg-3"></div>
                    <div class="news-date">
                        <h2><span>NOV</span> 25</h2>
                        <h1>2017</h1>
                    </div>
                    <div class="news-content">
                        <h2>The Witch Queen</h2>
                        <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her
                            hat, and teal eyes.</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="news-thumb">
                <div class="news-next">
                    <div class="single-news">
                        <div class="news-bg-3"></div>
                        <div class="news-date">
                            <h2><span>NOV</span> 25</h2>
                            <h1>2017</h1>
                        </div>
                        <div class="news-content">
                            <h2>The Witch Queen</h2>
                            <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under
                                her hat, and teal eyes.</p>
                        </div>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="news-prev">
                    <div class="single-news">
                        <div class="news-bg-2"></div>
                        <div class="news-date">
                            <h2><span>NOV</span> 25</h2>
                            <h1>2017</h1>
                        </div>
                        <div class="news-content">
                            <h2>The Witch Queen</h2>
                            <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under
                                her hat, and teal eyes.</p>
                        </div>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- news section end -->
@endsection
