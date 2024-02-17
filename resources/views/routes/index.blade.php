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
    <body class="antialiased">
<div class="section-best-drivers">
    <div class="uk-background-muted">
        <div class="uk-section uk-container">
            <div class="section-title uk-text-center">
            </div>
            <div class="section-content">
                <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>

                    <div>

                        @foreach($houraires as $houraire)
                        <div class="driver-card">
                            <div class="driver-card__body">
                                <div class="driver-card__user">
                                    <img src="{{ asset('assets/img/driver-1.png') }}" alt="driver-pic">
                                    <span>{{ $houraire-> }}</span>
                                </div>

                                <div class="driver-card__info">
                                    <div class="driver-card__date">
                                        {{ $houraire->startcity }}
                                        <br> at {{ $houraire->endcity_id }}
                                    </div>
                                    <div class="driver-card__price">
                                        For {{ $houraires->distance }} Passenger <b>Dh{{ $houraire->duration }}</b>
                                    </div>
                                </div>

                                <div class="driver-card__services">
                                    <ul>
                                        <li><img src="{{ asset('assets/img/driver-service-1.png') }}" alt="driver-service"><span>Max. {{ $houraire->max_passengers }} passengers in back seats</span></li>
                                        <li><img src="{{ asset('assets/img/driver-service-2.png') }}" alt="driver-service"><span>{{ $houraire->pets_allowed ? 'Pets are allowed in the Car' : 'Pets are not allowed in the Car' }}</span></li>
                                        <li><img src="{{ asset('assets/img/driver-service-3.png') }}" alt="driver-service"><span>{{ $houraire->smoking_allowed ? 'Smoking is allowed' : 'Smoking is not allowed' }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer">
    <div class="uk-container">
        <div class="page-footer__inner">
            <div class="page-footer__logo">
                <div class="logo"><a class="logo__link" href="https://pro-theme.com/"><img class="logo__img" style="width: 30%" src="assets/img/logo.png" alt="GetRider"></a></div>
            </div>
            <div class="page-footer__text">
                <p>Eorem ipsum dolor sit amet consectetur adipisicing elit edolore magna<br> aliqua ut enim ad minim veniam quis aliquip consequat</p>
            </div>
            <div class="page-footer__social">
                <ul class="social">
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#!"><i class="fas fa-rss"></i></a></li>
                </ul>
            </div>
            <div class="page-footer__copy"> <span>(c) 2024 All rights reserved.</span></div>
        </div>
    </div><!-- Additional blocks-->
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin">
                <div class="uk-margin-bottom">  
                    <div class="logo"><a class="logo__link" href="https://pro-theme.com/"><img class="logo__img" src="assets/img/logo-white.png" alt="GetRider"></a></div>
                </div>
                <div class="uk-margin">
                    <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-parent"><a href="#"> <img src="assets/img/search.svg" data-uk-svg alt="search">Find a Ride</a>
                            <ul class="uk-nav-sub">
                                <li><a href="02-search-1.html">Find a Ride</a></li>
                                <li><a href="02-search-2.html">Find a Ride Map</a></li>
                                <li><a href="02-search-3.html">Find a Ride Result</a></li>
                            </ul>
                        </li>
                        <li> <a href="07_typography.html"> <img src="assets/img/car.svg" data-uk-svg alt="car">Offer a Ride</a></li>
                        <li><a href="#"> <img src="assets/img/news-paper.svg" data-uk-svg alt="news-paper">News</a></li>
                        <li class="uk-parent"> <a href="#!"> <img src="assets/img/help2.svg" data-uk-svg alt="help2">Help </a>
                            <ul class="uk-nav-sub">
                                <li><a href="03_blog-1.html">Blog list</a></li>
                                <li><a href="04_blog-2.html">Blog grid</a></li>
                                <li><a href="05_blog-post.html">Blog post</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="uk-margin"><a class="uk-button uk-button-danger uk-width-1-1" href="tel:3457008800"> <img src="assets/img/logo.png" alt="call" data-uk-svg><span>+345 700 8800</span></a></div>
        </div>
    </div>
    <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div><!-- End Additional blocks-->
</footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/uikit.min.js"></script>
<script src="assets/js/uikit-icons.min.js"></script>
<script src="assets/js/datepicker.min.js"></script>
<script src="assets/js/i18n/datepicker.en.js"></script>
<script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from pro-theme.com/html/getrider/01_landing_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 18:54:37 GMT -->
</html>
</body>
</html>


