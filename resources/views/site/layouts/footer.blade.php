<div class="clearfix"></div>
<section class="section-setting section-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title wow fadeInDown">
                    <div class="back-colored"></div>
                    <div class="title">{{ trans('translate.our_clients') }}</div>
                </div><!--End Section title-->
            </div><!--End col-sm-12-->
            <div class="spacer-25"></div>
            <div id="client-slider" class="owl-carousel owl-theme">
                @foreach($our_clients as $client)
                    <div class="carousel-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="{{url('storage/uploads/our_clients_slider/')}}/{{$client->image_name}}">
                    </div><!--End carousel-item-->
                @endforeach

            </div>
        </div><!--End Row-->
    </div><!--End Container-->
</section><!--End Section-->
</div>
<!-- Start Footer
============================ -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-7 wow fadeInLeft">
                <div class="widget">
                    <div class="widget-title">
                        {{ trans('translate.about_us') }}
                    </div>
                    <div class="widget-content">
                        <p>
                            {{$home_abouts_image->getDetails()->where('lang', app()->getLocale())->first()->desc}}
                        </p>
                    </div>
                </div><!-- End widget -->
            </div><!-- End Col-md-8 -->
            <div class="col-md-5 wow fadeInRight" data-wow-duration="1s">
                <div class="widget">
                    <div class="widget-title">
                        {{ trans('translate.newsletters') }}
                    </div>
                    <div class="widget-content">
                        <p>
                            {{ trans('translate.subscribe_detail') }}
                        </p>

                        <div class="news-form">

                            <div id="warna" class="alert"></div>
                            <form id="subscribeForm" action="{{route('subscriber_email')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input class="form-control" id="subEmail" type="text" name="email" placeholder="{{ trans('translate.email_address') }}">
                                    <button  id="subscribeBut" type="submit" class="custom-btn">
                                        {{ trans('translate.send') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div><!-- End widget -->
            </div><!-- End Col-md-6 -->
        </div><!-- End Row -->
    </div><!-- End Container -->
</footer><!-- End Footer -->
<!-- Start Copy right
======================= -->
<div class="copy-right">
    {{ trans('translate.copy_rights') }}
</div><!-- End Copyright-->
</div><!-- End Main-->
</div><!--End wrapper-->

<!-- JS Base And Vendor
===================================-->
<script src="{{asset('assets/site')}}/vendor/jquery/jquery.js"></script>
<script src="{{asset('assets/site')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets/site')}}/vendor/modernizr/modernizr.js"></script>
<script src="{{asset('assets/site')}}/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script src="{{asset('assets/site')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="{{asset('assets/site')}}/vendor/wow-master/wow.min.js"></script>
<script src="{{asset('assets/site')}}/vendor/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>

<!-- Site JS
====================================-->
<script src="{{asset('assets/site')}}/js/main.js"></script>
@yield('scripts')
<script src="{{asset('assets/site')}}/js/sub.js"></script>
<script src="{{asset('assets/site')}}/js/message.js"></script>

</body>

</html>