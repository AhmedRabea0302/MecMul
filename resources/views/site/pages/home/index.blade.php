@extends('site.layouts.master')
@section('content')

    <div class="main" role="main">
        <section class="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($sliders as $key => $slider)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" @if($key == 0)class="active" @endif></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($sliders as $key => $slider)
                        <div class="item @if($key == 0) active @endif">
                            <img src="{{url('storage/uploads/slider')}}/{{$slider->image_name}}" alt="...">
                        </div>
                    @endforeach
                </div>


            </div>
        </section><!--End Slider-->
        <div class="clearfix"></div>
        <div class="page-content">
            <section class="section-setting">
                <div class="container">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title wow fadeInDown">
                                <div class="back"></div>
                                <div class="title">{{ trans('translate.about_us') }}</div>
                            </div>
                        </div><!--End col-sm-12-->
                        <div class="col-md-9 ">
                            <div class="about-content wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                                {{$home_abouts_image->getDetails()->where('lang',app()->getLocale())->first()->desc}}
                            </div>
                            <div class="quick-links">
                                <a href="{{route('site_about')}}" class="custom-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    {{ trans('translate.more_details') }}
                                </a>
                                <a href="{{route('site_services')}}" class="custom-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    {{ trans('translate.our_services') }}
                                </a>

                            </div>
                        </div><!--End col-md-9-->
                        <div class="col-md-3">
                            <div class="about-img">
                                <img src="{{url('storage/uploads/home_about')}}/{{$home_abouts_image->image_name}}">
                            </div>
                        </div><!--End col-md-3-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->
            <div class="clearfix"></div>
            <section class="section-setting section-color services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title wow fadeInDown">
                                <div class="back-colored"></div>
                                <div class="title">{{ trans('translate.our_services') }}</div>
                            </div><!--End Section title-->
                        </div><!--End Col-md-12-->
                        @foreach($services as $service)
                            <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
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

                        <div class="col-sm-12">
                            <a class="custom-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s" href="{{route('site_services')}}">
                                {{ trans('translate.more_services') }}
                            </a>
                        </div><!--End col-sm-12-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->
            <div class="clearfix"></div>
            <section class="section-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title wow fadeInDown">
                                <div class="back"></div>
                                <div class="title">{{ trans('translate.faq') }}</div>
                            </div><!--End Section title-->
                        </div><!--End col-sm-12-->
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="toggle-container" id="faq">
                                @foreach($faqs as $key => $faq)
                                    <div class="panel">
                                        <a href="#question{{$key}}" data-toggle="collapse" data-parent="#faq">
                                            {{$faq->getDetails()->where('lang', app()->getLocale())->first()->question}}
                                        </a>
                                        <div class="panel-collapse collapse @if($key == 0) in @endif" id="question{{$key}}">
                                            <div class="panel-content">
                                                <p>
                                                    {{$faq->getDetails()->where('lang', app()->getLocale())->first()->answer}}
                                                </p>
                                            </div><!-- end content -->
                                        </div><!--End panel-collapse-->
                                    </div><!--End Panel-->
                                @endforeach

                            </div>
                        </div><!--End col-md-6-->
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="features">
                                <div class="only-feat">
                                    <div class="title">
                                        {{ trans('translate.our_mission') }}
                                    </div>
                                    <div class="content">
                                        {{$mission->where('lang', app()->getLocale())->first()->our_services}}
                                    </div>
                                </div><!--End Feat-->
                                <div class="only-feat">
                                    <div class="title">
                                        {{ trans('translate.our_vision') }}
                                    </div>
                                    <div class="content">
                                        {{$mission->where('lang', app()->getLocale())->first()->our_mission}}
                                    </div>
                                </div><!--End Feat-->

                            </div><!--End Features-->
                        </div><!--End col-md-6-->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!--End Section-->

@stop