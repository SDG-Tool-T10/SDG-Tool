@extends('common.master')

@section('content')
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-01.jpg" alt="">
                    <div class="text-content">
                        <h3>Welcome To SDG-Tool</h3>
                        <h5>Sustainable Development Goals</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                        <a href="#" class="main-filled-button">Get It Now</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-02.jpg" alt="">
                    <div class="text-content">
                        <h3>HZ-University Of Applied Sciences Contibution</h3>
                        <h5>Sustainable Development Goals</h5>
                        <a href="#" class="main-stroked-button">Read More</a>
                        <a href="#" class="main-filled-button">Take Action</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="image/slide-03.jpg" alt="">
                    <div class="text-content">
                        <h3>For A Cleaner Future</h3>
                        <h5>Projects, Research and More</h5>
                        <a href="#" class="main-stroked-button">Learn More</a>
                        <a href="#" class="main-filled-button">Get It Now</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="card">
                    <div class="card-content">
                        <div class="content is-italic">
                            Here are some nice icons and maybe there should be a filter box somewhere..
                            Here are some nice icons and maybe there should be a filter box somewhere..
                            Here are some nice icons and maybe there should be a filter box somewhere..
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-sdg-goals is-align-content-space-evenly" style="padding-left: 90px">
                <div class="is-flex-wrap-wrap sdg-icon">
                    @foreach($sdgs as $sdg)
                        <a href="/sdgs/{{ $sdg->id }}"><img src="{{ $sdg->img_link }}"/></a>
                    @endforeach
                    <a href="#"><img src="./image/SDG-Icons-EN/sdg-en-18.png"/></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Digital Team</h6>
                        <h2>young and talented members</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big"
                     data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-01.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.01 White Cheese</h4>
                            <span>Digital Marketer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.02 Snow Mary</h4>
                            <span>Site Analyst</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-02.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.03 Johnny Egg</h4>
                            <span>Digital Influencer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-05.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Co Founder</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-03.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="image/member-item-06.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
