<!DOCTYPE HTML>
<html class="full">
<head>
    <title>Traveler - Login register</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/bright-turquoise.css') }}" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/turkish-rose.css') }}" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/salem.css') }}" title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/hippie-blue.css') }}" title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/mandy.css') }}" title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/green-smoke.css') }}" title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/horizon.css') }}" title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/cerise.css') }}" title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/brick-red.css') }}" title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/de-york.css') }}" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/shamrock.css') }}" title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/studio.css') }}" title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/leather.css') }}" title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/denim.css') }}" title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('css/schemes/scarlet.css') }}" title="scarlet" media="all" />
</head>

<body class="full">

<!-- FACEBOOK WIDGET -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /FACEBOOK WIDGET -->
<div class="global-wrap">

    @yield('content')


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
    <script src="{{ asset('js/typeahead.js') }}"></script>
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



