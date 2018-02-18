@extends('site.layouts.master')
@section('content')

    <div class="main" role="main">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{route('site_home')}}">{{ trans('translate.home') }}</a></li>
                            <li class="active">{{ trans('translate.faq') }}</li>
                        </ul>
                    </div><!--End col-md-6-->
                    <div class="col-md-6">
                        <h2>{{ trans('translate.faq') }}</h2>
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
                                <div class="title">{{ trans('translate.faq') }}</div>
                            </div>
                        </div><!--End col-sm-12-->
                        <div class="col-sm-12">
                            <div class="toggle-container " id="faq">

                                @foreach($faqs as $key=>$faq)
                                    <div class="panel wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <a href="#question{{$key}}" data-toggle="collapse" data-parent="#faq">
                                            {{$faq->getDetails()->where('lang', app()->getLocale())->first()->question}}
                                        </a>
                                        <div class="panel-collapse collapse @if($key==0) in @endif" id="question{{$key}}">
                                            <div class="panel-content">
                                                <p>
                                                    {{$faq->getDetails()->where('lang', app()->getLocale())->first()->answer}}
                                                </p>
                                            </div><!-- end content -->
                                        </div><!--End panel-collapse-->
                                    </div><!--End Panel-->
                                @endforeach

                            </div>
                        </div><!--End col-sm-12-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->

@stop