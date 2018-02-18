@extends('site.layouts.master')
@section('content')
    <div class="main" role="main">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{route('site_home')}}">{{ trans('translate.home') }}</a></li>
                            <li class="active">{{ trans('translate.gallery') }}</li>
                        </ul>
                    </div><!--End col-md-6-->
                    <div class="col-md-6">
                        <h2>{{ trans('translate.gallery') }}</h2>
                    </div><!--End col-md-6-->
                </div><!--End Row-->
            </div><!--End container-->
        </section><!--End page-heading-->
        <section class="section-setting our-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInDown">
                        <div class="section-title">
                            <div class="back"></div>
                            <div class="title">{{ trans('translate.gallery') }}</div>
                        </div>
                    </div>

                    @foreach($galleries as $gallery)
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="gallery">
                                <a href="{{url('storage/uploads/gallery')}}/{{$gallery->image_name}}">
                                    <img src="{{url('storage/uploads/gallery')}}/{{$gallery->image_name}}">
                                </a>
                            </div><!--End Gallery-->
                        </div><!--End Col-md-3-->
                    @endforeach

                </div><!--End Row-->
            </div><!--End Container-->
        </section><!--End Section-->
    </div>

@stop