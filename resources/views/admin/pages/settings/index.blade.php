@extends('admin.layouts.index')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(Session::has('m'))
                <?php $a = []; $a = session()->pull('m'); ?>
                <div class="alert alert-{{$a[0]}}">
                    {{$a[1]}}
                </div>
            @endif
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">{{ trans('translate.site_settings') }}</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div><!--End portlet-title-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{ route('settings.update') }}" method="post" class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.website_name') }}</label>
                                <div class="col-md-4">
                                    <input type="text" name="site_name" class="form-control input-circle" value="{{$settings->site_name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.website_url') }}</label>
                                <div class="col-md-4">
                                    <input type="text" name="site_url" class="form-control input-circle" value="{{$settings->site_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.website_name_search') }}</label>
                                <div class="col-md-4">
                                    <input type="text" name="site_name_search" class="form-control input-circle" value="{{$settings->site_name_search}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.website_email') }}</label>
                                <div class="col-md-4">
                                    <input type="text" name="site_mail" class="form-control input-circle" value="{{$settings->site_mail}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">{{ trans('translate.website_language') }}</label>
                                <div class="col-md-4">
                                    <input type="text" name="site_language" class="form-control input-circle" value="{{$settings->site_language}}">
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-circle green">{{ trans('translate.update') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div><!--End portlet-body-->
            </div><!--End portlet box green-->
        </div><!--End Col-md-12-->
    </div><!--nd Row-->
@stop