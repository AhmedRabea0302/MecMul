@extends('site.layouts.master')
@section('content')

    <div class="main" role="main">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{route('site_home')}}">{{ trans('translate.home') }}</a></li>
                            <li class="active">{{ trans('translate.about') }}</li>
                        </ul>
                    </div><!--End col-md-6-->
                    <div class="col-md-6">
                        <h2>{{ trans('translate.about') }}</h2>
                    </div><!--End col-md-6-->
                </div><!--End Row-->
            </div><!--End container-->
        </section><!--End page-heading-->
        <div class="page-content">
            <section class="section-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title wow fadeInDown">
                                <div class="back"></div>
                                <div class="title">{{ trans('translate.about') }}</div>
                            </div>
                        </div><!--End col-sm-12-->
                        <div class="col-md-9 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="about-content">
                                {{$abouta->getDetails()->where('lang', app()->getLocale())->first()->about_paragraph}}
                            </div>
                        </div><!--End col-md-9-->
                        <div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="about-img">
                                <img src="{{url('storage/uploads/images')}}/{{$abouta->image_name}}">
                            </div>
                        </div><!--End col-md-3-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->
            <section class="about-feature">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 only-feat wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="content">
                                {{$abouta->getDetails()->where('lang', app()->getLocale())->first()->about_left}}
                            </div>
                        </div><!--End Feat-->
                        <div class="col-sm-6 only-feat wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="content">
                                {{$abouta->getDetails()->where('lang', app()->getLocale())->first()->about_right}}
                            </div>
                        </div><!--End Feat-->
                    </div><!--End Row-->
                </div><!--End Container Fluid-->
            </section><!--End Section-->


@stop