<!-- Where Imagination Meets Innovation - VOGO -->
@vite('resources/css/app.css')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // axios available in the window object
    })
</script>
<!-- Head -->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>ARICAN İNŞAAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <link type="text/css" rel="stylesheet" href="/css/yourstyle.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<!-- loader -->
<div class="loader">
    <div id="movingBallG">
        <div class="movingBallLineG"></div>
        <div id="movingBallG_1" class="movingBallG"></div>
    </div>
</div>
<!-- loader end -->
<!--================= Main   ================-->
<div id="main">
    <!--================= header ================-->
    <header class="main-header">
        <!-- logo -->
        <a class="logo-holder" href="/">
            <img height="50" src="{{ Storage::url($settings->_get('logo')) }}" alt="">
        </a>
        <!-- logo end -->
        <!-- share button end-->
        <!-- mobile nav -->
        <div class="nav-button-wrap">
            <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
        </div>
        <!-- mobile nav end-->
        <!--  navigation -->
        <div class="nav-holder">
            <nav>
                <ul>
                    <li>
                        <a href="/" class="act-link">{{ __('Ana Sayfa') }} </a>
                    </li>
                    <li>
                        <a href="">{{ __('Kurumsal') }}</a>
                        <!--second level -->
                        <ul>
                            <li><a href="">{{ __('Başkanın Mesajı') }}</a></li>
                            <li><a href="">{{ __('Hakkımızda') }}</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href=""  >{{ __('Projeler') }}</a>
                        <!--second level end-->
                        <ul>
                            <li><a href="">{{ __('Devam Eden Projeler') }}</a></li>
                            <li><a href="">{{ __('Tamamlanan Projeler') }}</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="">{{ __('İletişim') }} </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </header>
    <!-- header  end -->

<!-- Body -->
@yield('content')

<!-- Footer -->
<footer class="main-footer">
    <div class="fixed-title"><span>Home Slider</span></div>
    <div class="footer-social">
        <ul>
            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
        </ul>
    </div>
</footer>
<!-- footer end-->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>
</body>

</html>
@vite('resources/js/app.js')
