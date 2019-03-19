<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Organic Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="source/images/icons/favicon.png"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{ Html::style('source/vendor/bootstrap/css/bootstrap.min.css') }}

    {{ Html::style('source/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}

    {{ Html::style('source/fonts/linearicons-v1.0.0/icon-font.min.css') }}

    {{ Html::style('source/vendor/animate/animate.css') }}

    {{ Html::style('source/vendor/css-hamburgers/hamburgers.min.css') }}

    {{ Html::style('source/vendor/animsition/css/animsition.min.css"') }}

    {{ Html::style('source/vendor/select2/select2.min.css') }}

    {{ Html::style('source/vendor/daterangepicker/daterangepicker.css') }}

    {{ Html::style('source/vendor/slick/slick.css') }}

    {{ Html::style('source/vendor/lightbox2/css/lightbox.min.css') }}

    {{ Html::style('source/vendor/perfect-scrollbar/perfect-scrollbar.css') }}

    {{ Html::style('source/vendor/revolution/css/layers.css') }}

    {{ Html::style('source/vendor/revolution/css/navigation.css') }}

    {{ Html::style('source/vendor/revolution/css/settings.css') }}

    {{ Html::style('source/css/util.css') }}

    {{ Html::style('source/css/main.css') }}
    {{ Html::style('source/css/style.css') }}

</head>

<body class="animsition">
    @include('public.layouts.header')
    @yield('content')
    @include('public.layouts.footer')

    {{ Html::script('source/vendor/jquery/jquery-3.2.1.min.js') }}
    {{ Html::script(asset('js/ajaxLogout.js')) }}
    {{ Html::script('source/vendor/animsition/js/animsition.min.js') }}

    {{ Html::script('source/vendor/bootstrap/js/popper.js') }}
    {{ Html::script('source/vendor/bootstrap/js/bootstrap.min.js') }}

    {{ Html::script('source/vendor/revolution/js/jquery.themepunch.tools.min.js') }}
    {{ Html::script('source/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}


    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}

    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}
    {{ Html::script('source/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}
    {{ Html::script('source/js/revo-custom.js') }}


    {{ Html::script('source/vendor/select2/select2.min.js') }}

    {{ Html::script('source/vendor/daterangepicker/moment.min.js') }}
    {{ Html::script('source/vendor/daterangepicker/daterangepicker.js') }}

    {{ Html::script('source/vendor/slick/slick.min.js') }}
    {{ Html::script('source/js/slick-custom.js') }}


    {{ Html::script('source/vendor/parallax100/parallax100.js') }}


    {{ Html::script('source/vendor/lightbox2/js/lightbox.min.js') }}


    {{ Html::script('source/vendor/isotope/isotope.pkgd.min.js') }}


    {{ Html::script('source/vendor/sweetalert/sweetalert.min.js') }}

    {{ Html::script('source/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}


    {{ Html::script('source/js/main.js') }}

</body>
</html>
