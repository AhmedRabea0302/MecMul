@extends('site.layouts.master')
@section('content')

    <div class="main" role="main">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{route('site_home')}}">{{ trans('translate.home') }}</a></li>
                            <li class="active">{{ trans('translate.services') }}</li>
                        </ul>
                    </div><!--End col-md-6-->
                    <div class="col-md-6">
                        <h2>{{ trans('translate.services') }}</h2>
                    </div><!--End col-md-6-->
                </div><!--End Row-->
            </div><!--End container-->
        </section><!--End page-heading-->
        <div class="page-content">
            <section class="section-setting servcies-page">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 wow fadeInDown">
                            <div class="section-title">
                                <div class="back"></div>
                                <div class="title">{{ trans('translate.our_services') }}</div>
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInLeft" data-wow-duration="1s">
                            <div class="serv-content">
                                <p>{{$abouta->where('lang', app()->getLocale())->first()->our_services}}</p>
                            </div>
                        </div>
                        <div class="col-md-5 wow fadeInRight" data-wow-duration="1s">
                            <div class="features">
                                <div class="only-feat">
                                    <div class="title">
                                        {{ trans('translate.our_mission') }}
                                    </div>
                                    <div class="content">
                                        {{$abouta->where('lang', app()->getLocale())->first()->our_mission}}
                                    </div>

                                </div><!--End Feat-->
                                <div class="only-feat">
                                    <div class="title">
                                        {{ trans('translate.our_vision') }}                                    </div>
                                    <div class="content">
                                        {{$abouta->where('lang', app()->getLocale())->first()->our_vision}}
                                    </div>
                                </div><!--End Feat-->
                            </div><!--End Features-->
                        </div>
                    </div>
                </div>
            </section><!--End Section-->
            <div class="clearfix"></div>
            <section class="section-setting section-color services">
                <div class="container">
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" >
                                <div class="serv-box">
                                    <div class="serv-img">
                                        <img src="{{url('storage/uploads/services')}}/{{$service->image_name}}">
                                    </div><!--End srv-img-->
                                    <div class="serv-content">
                                        <div class="title">
                                            {{$service->getDetails()->where('lang', app()->getLocale())->first()->service_title}}
                                        </div>
                                        <div class="details">
                                            {{$service->getDetails()->where('lang', app()->getLocale())->first()->service_description}}
                                        </div>
                                    </div><!--End Serv-content-->
                                </div><!--End Serv-box-->
                            </div><!--Emd Col-sm-6-->
                        @endforeach

                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->

@endsection