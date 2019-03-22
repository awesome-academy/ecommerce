<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="{{ config('setting.img_folder') }}/favicon.png">
        <title>Admin Organic Store</title>
        {{ Html::style('admin/source/css/bootstrap.min.css') }}
        {{ Html::style('admin/source/css/bootstrap-theme.css') }}
        {{ Html::style('admin/source/css/elegant-icons-style.css') }}
        {{ Html::style('admin/source/css/font-awesome.min.css') }}
        {{ Html::style('admin/source/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}

        {{ Html::style('admin/source/css/owl.carousel.css') }}
        {{ Html::style('admin/source/css/widgets.css') }}
        {{ Html::style('admin/source/css/style.css') }}
        {{ Html::style('admin/source/css/style-responsive.css') }}
        {{ Html::style('admin/source/css/xcharts.min.css') }}
        {{ Html::style('admin/source/css/jquery-ui-1.10.4.min.css') }}

    </head>
    <body>

        <section id="container" class="">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            @yield('content')
        </section>
        {{ Html::script('admin/source/js/jquery.js') }}
        {{ Html::script('admin/source/js/bootstrap.min.js') }}
        {{ Html::script('admin/source/js/jquery.scrollTo.min.js') }}
        {{ Html::script('admin/source/js/jquery.nicescroll.js') }}
        {{ Html::script('admin/source/assets/jquery-knob/js/jquery.knob.js') }}
        {{ Html::script('admin/source/js/owl.carousel.js') }}
        {{ Html::script('admin/source/js/jquery.customSelect.min.js') }}
        {{ Html::script('admin/source/js/scripts.js') }}
        {{ Html::script('admin/source/js/jquery.autosize.min.js') }}
        {{ Html::script('admin/source/js/jquery.slimscroll.min.js') }}
    </body>
</html>
