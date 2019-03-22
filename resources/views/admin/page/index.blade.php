@extends('admin.layouts.master')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> @lang('index.dashboard')</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">@lang('index.welcome_home')</a></li>
                    <li><i class="fa fa-laptop"></i>@lang('index.dashboard')</li>
                </ol>
            </div>
        </div>
        <div class="row">

            <!--/.col-->
        </div>
        <!--/.row-->
    </section>
</section>
@endsection
