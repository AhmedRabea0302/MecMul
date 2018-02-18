@extends('admin.layouts.index')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-10">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('m'))
                    <?php $a = []; $a = session()->pull('m'); ?>
                    <div class="alert alert-{{$a[0]}}">
                        {{$a[1]}}
                    </div>
                @endif

                <h2>{{ trans('translate.social_links') }}</h2>
                <form action="{{route('social_links')}}" width="100%" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="lead">{{ trans('translate.facebook_link') }}</label>
                        <input type="text" name="facebook" class="form-control" value="{{$social_links->facebook}}">
                    </div>

                    <div class="form-group">
                        <label class="lead">{{ trans('translate.twitter_link') }}</label>
                        <input type="text" name="twitter" class="form-control" value="{{$social_links->twitter}}">
                    </div>

                    <div class="form-group">
                        <label class="lead">{{ trans('translate.gmail_link') }}</label>
                        <input type="text" name="gmail" class="form-control" value="{{$social_links->gmail}}">
                    </div>

                    <input type="submit" value="{{ trans('translate.update') }}" class="btn btn-success" />
                </form>
                <hr style="background: #0c91e5; height: 1px" />

                <h2>{{ trans('translate.slider_image') }}</h2>

                <form action="{{route('add_slider')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <td><input type="file" name="slider" class="btn btn-info" /></td>
                    </div>
                    <td><input class="btn btn-success" value="{{ trans('translate.add') }}"  type="submit"></td>
                </form>
                <hr style="background: #0c91e5; height: 1px" />

                <h2>{{ trans('translate.slider_images') }}</h2>
                <table width="60%">
                    <tr>
                        <th style="width: 30%">{{ trans('translate.image') }}</th>
                        <th>{{ trans('translate.upload_image') }}</th>
                        <th>{{ trans('translate.update') }}</th>
                        <th>{{ trans('translate.delete') }}</th>
                    </tr>

                    @foreach($selectSlider as $slider)
                        <tr>
                            <td>
                                <img height="130px" width="120px" src="{{url('storage/uploads/slider')}}/{{$slider->image_name}}">
                            </td>


                            <form action="{{route('update_slider')}}" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="{{$slider->id}}" />
                                <td><input type="file" name="image" class="btn btn-info" /></td>
                                <td><input class="btn btn-success" value="{{ trans('translate.update') }}"  type="submit"></td>
                            </form>

                            <td>
                                <form action="{{route('delete_slider')}}" method="post">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{$slider->id}}" />
                                    <input type="submit" value="{{ trans('translate.delete') }}" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </table>
                <hr style="background: #0c91e5; height: 1px" />

                <h2>{{ trans('translate.home_about_section') }}</h2>
                <div style="max-width: 350px" class="thumbnail">
                    <?php $path = url('storage/uploads/home_about/') ?>
                    <img src="{{$path}}/{{$update_home_about->image_name}}">
                </div>
                <form action="{{route('update_home_about')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id"
                           value="{{$update_home_about->getDetails()->where('lang',app()->getLocale())->first()->id}}" />
                    <div class="form-group">
                        <label>{{ trans('translate.upload_image') }}</label>
                        <input type="file" name="home_about_image" class="btn btn-info" />
                    </div>

                    <div class="form-group">
                        <label>{{ trans('translate.home_about_english') }}</label>
                        <textarea name="home_about_paragraph_en" class="form-control" rows="6">
                            {{$update_home_about->getDetails()->where('lang', 'en')->first()->desc}}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>{{ trans('translate.home_about_arabic') }}</label>
                        <textarea name="home_about_paragraph_ar" class="form-control" rows="6">
                            {{$update_home_about->getDetails()->where('lang', 'ar')->first()->desc}}
                        </textarea>
                    </div>

                    <input type="submit" class="btn btn-success" value="{{ trans('translate.update') }}" />
                </form>
                <br> <div class="clearfix"></div>
                <hr style="background: #0c91e5; height: 1px" />

                <div class="row">
                    <div class="container">
                        <div class="col-md-8">

                            <h2 class="lead">{{ trans('translate.our_client_slider') }}</h2>

                            <form enctype="multipart/form-data" method="post" action="{{route('upload_client_image')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label>{{ trans('translate.upload_image') }}</label>
                                    <input type="file" name="upload_slider_image" class="btn btn-info" />
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="{{ trans('translate.add') }}" />
                                </div>
                            </form>
                            <br> <div class="clearfix"></div>
                            <hr style="background: #0c91e5; height: 1px" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <table width="100%">
                            <tr>
                                <th>{{ trans('translate.image') }}</th>
                                <th>{{ trans('translate.update') }}</th>
                                <th>{{ trans('translate.edit') }}</th>
                                <th>{{ trans('translate.delete') }}</th>
                            </tr>

                            @foreach($all_clients as $client)
                                <tr>
                                    <td><img width="150px" height="120px" src="{{url('storage/uploads/our_clients_slider/')}}/{{$client->image_name}}"></td>
                                    <form method="post" action="{{route('update_client_image')}}" enctype="multipart/form-data">
                                        {!! csrf_field() !!}

                                        <td>
                                            <input type="hidden" name="id" value="{{$client->id}}" />
                                            <input type="file" class="btn btn-success" name="edit_image_slider" />
                                        </td>

                                        <td><input type="submit" class="btn btn-success" value="{{ trans('translate.update') }}"></td>
                                    </form>

                                    <form method="post" action="{{route('delete_client_image')}}">
                                        {!! csrf_field() !!}
                                        <td>
                                            <input type="hidden" name="id" value="{{$client->id}}" />
                                            <input type="submit" class="btn btn-danger" value="{{ trans('translate.delete') }}" />
                                        </td>
                                    </form>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <br> <div class="clearfix"></div>
                            <hr style="background: #0c91e5; height: 1px" />
                            <h2>{{ trans('translate.subscribers') }}</h2>
                            <ul class="list-unstyled">

                            </ul>

                            <table class="table">

                                <tr>
                                    <td><a href="{{route('send_mail')}}" class="btn btn-danger">{{ trans('translate.delete_selected') }}</a></td>
                                    <td><a href="{{route('send_mail')}}" class="btn btn-info">{{ trans('translate.delete_all') }}</a></td>
                                    <td><a href="{{route('send_mail')}}" class="btn btn-info">{{ trans('translate.reply_all') }}</a></td>
                                    <td><a href="{{route('send_mail')}}" class="btn btn-info">{{ trans('translate.reply_selected') }}</a></td>
                                </tr>

                                <tr>
                                    <th>{{ trans('translate.email') }}</th>
                                    <th>{{ trans('translate.reply') }}</th>
                                    <th>{{ trans('translate.delete') }}</th>
                                    <th>{{ trans('translate.select') }}</th>
                                </tr>

                                @foreach($subscribers as $subscriber)
                                    <tr>

                                        <td>{{$subscriber->email}}</td>
                                        <form action="{{route('send_reply_to_subscriber', $subscriber->id)}}" method="post">
                                            <input type="hidden" name="sub_id" value="{{$subscriber->id}}" />
                                            <td><input type="submit" class="btn btn-info" value="{{ trans('translate.send') }}"></td>
                                        </form>

                                        <form action="{{route('delete_subscriber')}}" method="post">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="sub_id_d" value="{{$subscriber->id}}" />
                                            <td><input type="submit" value="{{ trans('translate.delete') }}" class="btn btn-danger" /></td>
                                        </form>
                                        <td><input type="checkbox" value="{{$subscriber->id}}"/></td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
@stop
