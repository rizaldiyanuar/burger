<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.ico')}}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href="{{asset('assets/frontend/css/global.css')}}">
    <link rel='stylesheet' href="{{asset('assets/frontend/css/structure.css')}}">
    <link rel='stylesheet' href="{{asset('assets/frontend/css/burger2.css')}}">
    <link rel='stylesheet' href="{{asset('assets/frontend/css/custom.css')}}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/css/settings.css')}}">

</head>

<body class="template-slider color-custom style-simple button-flat layout-full-width header-split minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-209621">
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')
    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>


    <!-- JS -->
    <script src="{{asset('assets/frontend/js/jquery-2.1.4.min.js')}}"></script>

    <script src="{{asset('assets/frontend/js/mfn.menu.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.plugins.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.jplayer.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/animations/animations.js')}}"></script>
    <script src="{{asset('assets/frontend/js/translate3d.js')}}"></script>
    <script src="{{asset('assets/frontend/js/scripts.js')}}"></script>

    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/frontend/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js')}}"></script>


    <script>
        var revapi1, tpj;
        ( function() {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();
                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                    } else {
                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                            sliderType : "standard",
                            sliderLayout : "fullscreen",
                            dottedOverlay : "none",
                            delay : 9000,
                            navigation : {
                                onHoverStop : "off",
                            },
                            visibilityLevels : [1240, 1024, 778, 480],
                            gridwidth : 1240,
                            gridheight : 800,
                            lazyType : "none",
                            parallax : {
                                type : "mouse",
                                origo : "slidercenter",
                                speed : 3000,
                                speedbg : 0,
                                speedls : 3000,
                                levels : [2, 4, 6, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            },
                            shadow : 0,
                            spinner : "spinner2",
                            stopLoop : "on",
                            stopAfterLoops : 0,
                            stopAtSlide : 2,
                            shuffle : "off",
                            autoHeight : "off",
                            fullScreenAutoWidth : "off",
                            fullScreenAlignForce : "off",
                            fullScreenOffsetContainer : "",
                            fullScreenOffset : "",
                            disableProgressBar : "on",
                            hideThumbsOnMobile : "off",
                            hideSliderAtLimit : 0,
                            hideCaptionAtLimit : 0,
                            hideAllCaptionAtLilmit : 0,
                            debugMode : false,
                            fallbacks : {
                                simplifyAll : "off",
                                nextSlideOnWindowFocus : "off",
                                disableFocusListener : false,
                            }
                        });
                    };
                };
            }());
    </script>
</body>

</html>
