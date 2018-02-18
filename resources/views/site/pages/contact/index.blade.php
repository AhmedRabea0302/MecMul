@extends('site.layouts.master')
@section('content')

    <div class="main" role="main">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{route('site_home')}}">{{ trans('translate.home') }}</a></li>
                            <li class="active">{{ trans('translate.contact') }}</li>
                        </ul>
                    </div><!--End col-md-6-->
                    <div class="col-md-6">
                        <h2>{{ trans('translate.contact') }}</h2>
                    </div><!--End col-md-6-->
                </div><!--End Row-->
            </div><!--End container-->
        </section><!--End page-heading-->
        <div class="page-content">
            <section class="section-setting">
                <div class="container">

                    <div class="row">
                        <div class="col-md-7">
                            @if(Session::has('m'))
                                <?php $a = []; $a = session()->pull('m'); ?>
                                <div class="alert alert-{{$a[0]}}">
                                    {{$a[1]}}
                                </div>
                            @endif

                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="alert hidden" id="messageForm"></div>
                            <form id="contact-form" action="{{route('call_us')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="1s">
                                        <label class="input">
                                            <i class="fa fa-user"></i>
                                            <input class="form-control" id="sender-name" name="name" placeholder="{{ trans('translate.full_name') }}" type="text">
                                        </label>
                                    </div><!--End col-md-6-->
                                    <div class="col-md-6 wow fadeInDown" data-wow-duration="1s">
                                        <label class="input">
                                            <i class="fa fa-phone"></i>
                                            <input class="form-control" id="phone_number" name="phone_number" placeholder="{{ trans('translate.phone_number') }}"type="text">
                                        </label>
                                    </div><!--End col-md-6-->
                                </div><!--End row-->
                                <div class="row">
                                    <div class="col-md-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <label class="input">
                                            <i class="fa fa-envelope-o"></i>
                                            <input class="form-control" id="email" name="email" placeholder="{{ trans('translate.email_address') }}" type="text">
                                        </label>
                                    </div><!--End col-md-12-->
                                </div><!--End row-->
                                <div class="row">
                                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
                                        <label class="input textarea">
                                            <i class="fa fa-comment"></i>
                                            <textarea rows="7" name="message" id="semder-message" class="form-control" placeholder="{{ trans('translate.message') }}"></textarea>
                                        </label>
                                    </div>
                                </div><!--End row-->
                                <button class="custom-btn submitBTN" type="submit">
                                    {{ trans('translate.contact_us') }}
                                </button>
                            </form>
                        </div><!--End col-md-8-->
                        <div class="col-md-5">
                            <div class="contact-info">
                                <div class="contact-info-item">
                                            <span>
                                                <i class="fa fa-mobile"></i>
                                                {{ trans('translate.sales_number') }} :
                                            </span>
                                    <span>{{$contact->sales_number}}</span>
                                </div><!--End contact-info-item-->
                                <div class="contact-info-item">
                                            <span>
                                                <i class="fa fa-whatsapp"></i>
                                                {{ trans('translate.whatsup') }} :
                                            </span>
                                    <span>{{$contact->whatsup}}</span>
                                </div><!--End contact-info-item-->
                                <div class="contact-info-item">
                                            <span>
                                                <i class="fa fa-envelope-o"></i>
                                                {{ trans('translate.email_address') }} :
                                            </span>
                                    <span>{{$contact->email}}</span>
                                </div><!--End contact-info-item-->
                                <div class="contact-info-item">
                                            <span>
                                                <i class="fa fa-map-marker"></i>
                                                {{ trans('translate.address') }} :
                                            </span>
                                    <span>{{$contact->address}}</span>
                                </div><!--End contact-info-item-->
                            </div><!--End contact-info-->
                        </div><!--End col-md-4-->
                    </div><!--End row-->
                </div><!--End Container-->
            </section><!--End Section-->
        </div><!--End Page Content-->

@stop