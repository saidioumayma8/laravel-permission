<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MonGrandTaxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @include('layouts.head')
    </head>
    <body class="antialiased" class="page-home">


    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__scroll" data-uk-sticky>
                <div class="uk-container">
                    <div class="page-header__inner">
                        <div class="page-header__logo">
                            <div class="logo" style="width: 30%" ><a class="logo__link" href="index.html"><img class="logo__img" src="assets/img/logo.png" alt="MonGrandTaxi"></a></div>
                        </div>
                        <div class="page-header__menu">
                            <nav class="page-nav" data-uk-navbar="">
                                <ul class="uk-navbar-nav">
                                    <li><a href="02-search-1.html"> <img src="assets/img/search.svg" data-uk-svg alt="search">Find a Ride</a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="02-search-1.html">Find a Ride</a></li>
                                                <li><a href="02-search-2.html">Find a Ride Map</a></li>
                                                <li><a href="02-search-3.html">Find a Ride Result</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="07_typography.html"> <img src="assets/img/car.svg" data-uk-svg alt="car">Offer a Ride</a></li>
                                    <li><a href="03_blog-1.html"> <img src="assets/img/news-paper.svg" data-uk-svg alt="news-paper">News</a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="03_blog-1.html">Blog list</a></li>
                                                <li><a href="04_blog-2.html">Blog grid</a></li>
                                                <li><a href="05_blog-post.html">Blog post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="06_contact.html"> <img src="assets/img/help2.svg" data-uk-svg alt="help2">Help</a></li>
                                    <li><div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                        @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth
                                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </div></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="page-header__phone"><a class="uk-button uk-button-danger" href="tel:3457008800"> <i class="flaticon-phone-call"></i><span>+212 625 207 25</span></a></div>
                        <div class="page-header__btn"> <a class="uk-button uk-button-danger" href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
                    </div>
                </div>
            </div>
        </header>
        <main class="page-main">
            <div class="section-banner">
                <div class="section-banner__bg">
                    <div class="uk-cover-container"><img src="assets/img/img-banner.jpg" alt="img-banner" data-uk-cover><canvas class="slide-canvas"></canvas></div>
                </div>
                <div class="section-banner__content uk-text-center">
                    <div class="uk-overlay uk-position-center-left uk-width-1-1">
                        <div class="uk-container uk-width-1-1">
                            <div class="section-banner__title"><span>Book for less today! Try GetRider</span>
                                <h1 class="decor-top">Need to Travel? Get a lift<br> or Find a free seat</h1>
                            </div>
                            <div class="section-banner__btn"> <a class="uk-button uk-button-default" href="#welcome">Get Started</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-popular-places" id="welcome">
                <div class="uk-container">
                    <div class="popular-places">
                        <div class="popular-places__head">
                            <div class="popular-places__title">Where do you want a ride today?</div>
                            <div class="popular-places__more"> <a href="02-search-3.html">More Popular Places </a></div>
                        </div>
                        <div class="popular-places__body">
                            <div class="uk-grid uk-child-width-1-3@m" data-uk-grid>
                                <div>
                                    <div class="popular-places-item"><a class="popular-places-item__link" href="02-search-1.html"><span class="popular-places-item__title">London <small>to</small> Manchester</span><span class="popular-places-item__price">$5</span><span data-uk-icon="chevron-right"></span></a></div>
                                </div>
                                <div>
                                    <div class="popular-places-item"><a class="popular-places-item__link" href="02-search-2.html"><span class="popular-places-item__title">Belarus <small>to</small> Russia</span><span class="popular-places-item__price">$10</span><span data-uk-icon="chevron-right"></span></a></div>
                                </div>
                                <div>
                                    <div class="popular-places-item"><a class="popular-places-item__link" href="02-search-3.html"><span class="popular-places-item__title">Florida <small>to</small> Newyork</span><span class="popular-places-item__price">$8</span><span data-uk-icon="chevron-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-steps">
                <div class="uk-section uk-container">
                    <div class="section-title uk-text-center">
                        <div class="uk-h2">How It Works</div>
                    </div>
                    <div class="section-content">
                        <div data-uk-slider="finite: true">
                            <div class="uk-position-relative" tabindex="-1">
                                <ul class="uk-grid uk-grid-large uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
                                    <li>
                                        <div class="step-item">
                                            <div class="step-item__icon">
                                                <div class="step-item__icon-box"><i class="flaticon-money"></i></div>
                                            </div>
                                            <div class="step-item__title">Find Your Ride</div>
                                            <div class="step-item__text">Eorem ipsum dolor sit amet elit edolore aliquaut enim nim veniam aliquip consequat</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="step-item">
                                            <div class="step-item__icon">
                                                <div class="step-item__icon-box"><i class="flaticon-car-repair-check-list"></i></div>
                                            </div>
                                            <div class="step-item__title">Select & Book</div>
                                            <div class="step-item__text">Eorem ipsum dolor sit amet elit edolore aliquaut enim nim veniam aliquip consequat</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="step-item">
                                            <div class="step-item__icon">
                                                <div class="step-item__icon-box"><i class="flaticon-car"></i></div>
                                            </div>
                                            <div class="step-item__title">Travel Together</div>
                                            <div class="step-item__text">Eorem ipsum dolor sit amet elit edolore aliquaut enim nim veniam aliquip consequat</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-best-drivers">
                <div class="uk-background-muted">
                    <div class="uk-section uk-container">
                        <div class="section-title uk-text-center">
                            <div class="uk-h2">Our Best Drivers</div>
                            <p>Eorem ipsum dolor sit amet consectetur adipisicing elit edolore magna<br> aliqua ut enim ad minim veniam quis aliquip consequat</p>
                        </div>
                        <div class="section-content">
                            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>

                                <div>
                                    <div class="driver-card">
                                        {{-- <div class="driver-card__media"><img src="assets/img/car-4.jpg" alt="car"></div> --}}
                                        <div class="driver-card__body">
                                            <div class="driver-card__user"> <img src="assets/img/driver-1.png" alt="driver-pic"><span>Ben Strokes</span></div>
                                            <div class="driver-card__info">
                                                <div class="driver-card__date">Wed, 8 January<br> at 2:00 PM</div>
                                                <div class="driver-card__price">For 1 Passenger <b>190 dh </b></div>
                                            </div>
                                            <div class="driver-card__services">
                                                <ul>
                                                    <li><img src="assets/img/driver-service-1.png" alt="driver-service"><span>Max. 2 passengers in back seats</span></li>
                                                    <li><img src="assets/img/driver-service-2.png" alt="driver-service"><span>Pets are not allowed in the Car</span></li>
                                                    <li><img src="assets/img/driver-service-3.png" alt="driver-service"><span>Smoking is not allowed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="driver-card">
                                        {{-- <div class="driver-card__media"><img src="assets/img/car-5.jpg" alt="car"></div> --}}
                                        <div class="driver-card__body">
                                            <div class="driver-card__user"> <img src="assets/img/driver-2.png" alt="driver-pic"><span>Shane Michael</span></div>
                                            <div class="driver-card__info">
                                                <div class="driver-card__date">Wed, 8 January<br> at 2:00 PM</div>
                                                <div class="driver-card__price">For 1 Passenger <b>190 dh</b></div>
                                            </div>
                                            <div class="driver-card__services">
                                                <ul>
                                                    <li><img src="assets/img/driver-service-1.png" alt="driver-service"><span>Max. 2 passengers in back seats</span></li>
                                                    <li><img src="assets/img/driver-service-2.png" alt="driver-service"><span>Pets are not allowed in the Car</span></li>
                                                    <li><img src="assets/img/driver-service-3.png" alt="driver-service"><span>Smoking is not allowed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="driver-card">
                                        {{-- <div class="driver-card__media"><img src="assets/img/car-6.jpg" alt="car"></div> --}}
                                        <div class="driver-card__body">
                                            <div class="driver-card__user"> <img src="assets/img/driver-3.png" alt="driver-pic"><span>John Matthew</span></div>
                                            <div class="driver-card__info">
                                                <div class="driver-card__date">Wed, 8 January<br> at 2:00 PM</div>
                                                <div class="driver-card__price">For 1 Passenger <b>190 dh</b></div>
                                            </div>
                                            <div class="driver-card__services">
                                                <ul>
                                                    <li><img src="assets/img/driver-service-1.png" alt="driver-service"><span>Max. 2 passengers in back seats</span></li>
                                                    <li><img src="assets/img/driver-service-2.png" alt="driver-service"><span>Pets are not allowed in the Car</span></li>
                                                    <li><img src="assets/img/driver-service-3.png" alt="driver-service"><span>Smoking is not allowed</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-about">
                <div class="section-about__img"><img src="assets/img/img-car.png" alt=""></div>
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-2@m" data-uk-grid>
                        <div>
                            <div class="section-title">
                                <div class="uk-h2">About GetRider</div>
                            </div>
                            <div class="section-content">
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            <div class="about-list-item__icon"><img src="assets/img/about-1.svg" alt="ico-about" data-uk-svg></div>
                                            <div class="about-list-item__desc">
                                                <div class="about-list-item__title">Millions Of Journeys</div>
                                                <div class="about-list-item__desc">Incididunt ut laboret dolore magna aliqua laboris nisialiquip ex lorem ipsum dolor eiusmod tempory incididunt sed ipsum loea ...</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <div class="about-list-item__icon"><img src="assets/img/about-2.svg" alt="ico-about" data-uk-svg></div>
                                            <div class="about-list-item__desc">
                                                <div class="about-list-item__title">Largest Car Rider Service</div>
                                                <div class="about-list-item__desc">Incididunt ut laboret dolore magna aliqua laboris nisialiquip ex lorem ipsum dolor eiusmod tempory incididunt sed ipsum loea ...</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <div class="about-list-item__icon"><img src="assets/img/about-3.svg" alt="ico-about" data-uk-svg></div>
                                            <div class="about-list-item__desc">
                                                <div class="about-list-item__title">Simple & Smart Riding</div>
                                                <div class="about-list-item__desc">Incididunt ut laboret dolore magna aliqua laboris nisialiquip ex lorem ipsum dolor eiusmod tempory incididunt sed ipsum loea ...</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-visible@m"></div>
                    </div>
                </div>
            </div>


            <div class="section-blog">
                <div class="uk-background-muted">
                    <div class="uk-section uk-container">
                        <div class="section-title uk-text-center">
                            <div class="uk-h2">Latest From Blog</div>
                            <p>Eorem ipsum dolor sit amet consectetur adipisicing elit edolore magna<br> aliqua ut enim ad minim veniam quis aliquip consequat</p>
                        </div>
                        <div class="section-content">
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
                                        <li>
                                            <div class="blog-card">
                                                <div class="blog-card__box">
                                                    <div class="blog-card__media"><a href="05_blog-post.html"><img src="assets/img/blog-thumb-1.jpg" alt="Making car rentals easy for customers" /></a>
                                                        <div class="blog-card__date"> <span>Jan</span><span>17</span></div>
                                                    </div>
                                                    <div class="blog-card__body">
                                                        <div class="blog-card__info">
                                                            <div class="blog-card__author"> <i class="fas fa-user"></i>Stephen Moya</div>
                                                            <div class="blog-card__category"> <i class="fas fa-folder-open"></i>Car Hire</div>
                                                        </div>
                                                        <div class="blog-card__title"> <a href="05_blog-post.html">Making car rentals easy for customers</a></div>
                                                        <div class="blog-card__intro">
                                                            <p>Incididunt ut labore et dolore magna aliqua laboris nisialiquip ex loea Lorem ipsum dolor eiusmod tempor incididunt ...</p>
                                                        </div>
                                                        <div class="blog-card__more"><a class="uk-button uk-button-default" href="05_blog-post.html">Read more</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="blog-card">
                                                <div class="blog-card__box">
                                                    <div class="blog-card__media"><a href="05_blog-post.html"><img src="assets/img/blog-thumb-2.jpg" alt="Enjoy your family trips with full happiness" /></a>
                                                        <div class="blog-card__date"> <span>Jan</span><span>25</span></div>
                                                    </div>
                                                    <div class="blog-card__body">
                                                        <div class="blog-card__info">
                                                            <div class="blog-card__author"> <i class="fas fa-user"></i>Stephen Moya</div>
                                                            <div class="blog-card__category"> <i class="fas fa-folder-open"></i>Car Hire</div>
                                                        </div>
                                                        <div class="blog-card__title"> <a href="05_blog-post.html">Enjoy your family trips with full happiness</a></div>
                                                        <div class="blog-card__intro">
                                                            <p>Incididunt ut labore et dolore magna aliqua laboris nisialiquip ex loea Lorem ipsum dolor eiusmod tempor incididunt ...</p>
                                                        </div>
                                                        <div class="blog-card__more"><a class="uk-button uk-button-default" href="05_blog-post.html">Read more</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="blog-card">
                                                <div class="blog-card__box">
                                                    <div class="blog-card__media"><a href="05_blog-post.html"><img src="assets/img/blog-thumb-3.jpg" alt="Quick hire with no-extra charges at all" /></a>
                                                        <div class="blog-card__date"> <span>Feb</span><span>10</span></div>
                                                    </div>
                                                    <div class="blog-card__body">
                                                        <div class="blog-card__info">
                                                            <div class="blog-card__author"> <i class="fas fa-user"></i>Stephen Moya</div>
                                                            <div class="blog-card__category"> <i class="fas fa-folder-open"></i>Car Hire</div>
                                                        </div>
                                                        <div class="blog-card__title"> <a href="05_blog-post.html">Quick hire with no-extra charges at all</a></div>
                                                        <div class="blog-card__intro">
                                                            <p>Incididunt ut labore et dolore magna aliqua laboris nisialiquip ex loea Lorem ipsum dolor eiusmod tempor incididunt ...</p>
                                                        </div>
                                                        <div class="blog-card__more"><a class="uk-button uk-button-default" href="05_blog-post.html">Read more</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="blog-card">
                                                <div class="blog-card__box">
                                                    <div class="blog-card__media"><a href="05_blog-post.html"><img src="assets/img/blog-thumb-1.jpg" alt="Making car rentals easy for customers" /></a>
                                                        <div class="blog-card__date"> <span>Jan</span><span>17</span></div>
                                                    </div>
                                                    <div class="blog-card__body">
                                                        <div class="blog-card__info">
                                                            <div class="blog-card__author"> <i class="fas fa-user"></i>Stephen Moya</div>
                                                            <div class="blog-card__category"> <i class="fas fa-folder-open"></i>Car Hire</div>
                                                        </div>
                                                        <div class="blog-card__title"> <a href="05_blog-post.html">Making car rentals easy for customers</a></div>
                                                        <div class="blog-card__intro">
                                                            <p>Incididunt ut labore et dolore magna aliqua laboris nisialiquip ex loea Lorem ipsum dolor eiusmod tempor incididunt ...</p>
                                                        </div>
                                                        <div class="blog-card__more"><a class="uk-button uk-button-default" href="05_blog-post.html">Read more</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        @include('layouts.footer')
    </div>
    @include('layouts.footer-scripts')
    </body>
</html>
