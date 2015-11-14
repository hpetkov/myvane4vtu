<!DOCTYPE HTML>
<html>
    <head>
        <title>MyVane - Споделено пътуване</title>


        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta name="keywords" content="Template, html, premium, themeforest" />
        <meta name="description" content="Traveler - Premium template for travel companies">
        <meta name="author" content="MyVane">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,700italic,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <!-- /GOOGLE FONTS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
        <script src="{{ asset('js/modernizr.js') }}"></script>

        <link rel="alternate stylesheet" type="text/css" href="css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/salem.css" title="salem" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/mandy.css" title="mandy" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/green-smoke.css" title="green-smoke" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/horizon.css" title="horizon" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/cerise.css" title="cerise" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/brick-red.css" title="brick-red" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/shamrock.css" title="shamrock" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/studio.css" title="studio" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/leather.css" title="leather" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/denim.css" title="denim" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="css/schemes/scarlet.css" title="scarlet" media="all" />
    </head>

    <body>

        <!-- FACEBOOK WIDGET -->
        <div id="fb-root"></div>
        <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- /FACEBOOK WIDGET -->
        <div class="global-wrap">
            <header id="main-header">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="logo" href="index-2.html">
                                    <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </div>
                            <div class="col-md-3 col-md-offset-2">
                                <form class="main-header-search">
                                    <div class="form-group form-group-icon-left">
                                        <i class="fa fa-search input-icon"></i>
                                        <input type="text" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="top-user-area clearfix">
                                    <ul class="top-user-area-list list list-horizontal list-border">
                                        <li class="top-user-area-avatar">
                                            <a href="user-profile.html">
                                                <img class="origin round" src="img/amaze_40x40.jpg" alt="Image Alternative text" title="AMaze" />Hi, John</a>
                                        </li>
                                        <li><a href="#">Изход</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="nav">
                        <ul class="slimmenu" id="slimmenu">
                            <li class="active"><a href="{{url("/")}}">Начало</a>
                            </li>
                            <li><a href="{{url("travelling/listing")}}">Пътувания</a>
                            </li>
                            <li><a href="{{url("travelling/add")}}">Добави пътуване</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <!-- TOP AREA -->

            <!-- END TOP AREA  -->

            @yield('content')



            <footer id="main-footer">
                <div class="container">
                    <div class="row row-wrap">
                        <div class="col-md-3">
                            <a class="logo" href="index-2.html">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                            <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                            <ul class="list list-horizontal list-space">
                                <li>
                                    <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h4>Newsletter</h4>
                            <form>
                                <label>Enter your E-mail Address</label>
                                <input type="text" class="form-control">
                                <p class="mt5"><small>*We Never Send Spam</small>
                                </p>
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </form>
                        </div>
                        <div class="col-md-2">
                            <ul class="list list-footer">
                                <li><a href="#">About US</a>
                                </li>
                                <li><a href="#">Press Centre</a>
                                </li>
                                <li><a href="#">Best Price Guarantee</a>
                                </li>
                                <li><a href="#">Travel News</a>
                                </li>
                                <li><a href="#">Jobs</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                                <li><a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Have Questions?</h4>
                            <h4 class="text-color">+1-202-555-0173</h4>
                            <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                            <p>24/7 Dedicated Customer Support</p>
                        </div>

                    </div>
                </div>
            </footer>

            <script src="{{ asset('js/jquery.js') }}"></script>
            <script src="{{ asset('js/bootstrap.js') }}"></script>
            <script src="{{ asset('js/slimmenu.js') }}"></script>
            <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
            <script src="{{ asset('js/bootstrap-timepicker.js') }}"></script>
            <script src="{{ asset('js/nicescroll.js') }}"></script>
            <script src="{{ asset('js/dropit.js') }}"></script>
            <script src="{{ asset('js/ionrangeslider.js') }}"></script>
            <script src="{{ asset('js/icheck.js') }}"></script>
            <script src="{{ asset('js/fotorama.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
            <script src="{{ asset('js/typeahead.js') }}"></script>
            <script src="{{ asset('js/card-payment.js') }}"></script>
            <script src="{{ asset('js/magnific.js') }}"></script>
            <script src="{{ asset('js/owl-carousel.js') }}"></script>
            <script src="{{ asset('js/fitvids.js') }}"></script>
            <script src="{{ asset('js/tweet.js') }}"></script>
            <script src="{{ asset('js/countdown.js') }}"></script>
            <script src="{{ asset('js/gridrotator.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
            <script src="{{ asset('js/switcher.js') }}"></script>
        </div>
    </body>

</html>



