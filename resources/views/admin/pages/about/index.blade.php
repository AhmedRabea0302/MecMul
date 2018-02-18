@extends('admin.layouts.index')
@section('content')

    <div class="row">

        <div class="col-md-10">
            @if(Session::has('m'))
                <?php $a = []; $a = session()->pull('m') ?>
                <div  class="alert alert-{{$a[0]}}">
                    {{$a[1]}}
                </div>
            @endif

            <h3>{{ trans('translate.about_image') }}</h3>
            <div style="max-width: 350px" class="thumbnail">
                <?php $path = url('storage/uploads/images/') ?>
                <img src="{{$path}}/{{$result->image_name}}">
            </div>

            <div class="clearfix"></div>
            <form action="{{route('update_about')}}" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    {!! csrf_field() !!}

                    <input class="btn btn-danger" type="file" name="image_path"/><br /><br />
                    <label class="lead">{{ trans('translate.about_p_english') }}</label>
                    <textarea name="first_paragraph_en" rows="10" class="form-control" >{{ $result->getDetails()->where('lang', 'en')->first()->about_paragraph }}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.about_p_arabic') }}</label>
                    <textarea name="first_paragraph_ar" rows="10" class="form-control" >{{ $result->getDetails()->where('lang', 'ar')->first()->about_paragraph }}</textarea><br /><br />

                    <label class="lead">{{ trans('translate.about_left_english') }}</label>
                    <textarea name="left_about_en" rows="6" class="form-control" >{{ $result->getDetails()->where('lang', 'en')->first()->about_left }}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.about_left_arabic') }}</label>
                    <textarea name="left_about_ar" rows="6" class="form-control" >{{ $result->getDetails()->where('lang', 'ar')->first()->about_left }}</textarea><br /><br />

                    <label class="lead">{{ trans('translate.about_right_english') }}</label>
                    <textarea name="right_about_en" rows="6" class="form-control" >{{ $result->getDetails()->where('lang', 'en')->first()->about_right }}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.about_right_arabic') }}</label>
                    <textarea name="right_about_ar" rows="6" class="form-control" >{{ $result->getDetails()->where('lang', 'ar')->first()->about_right }}</textarea><br /><br />

                    <input class="btn btn-success btn-rounded" value="Update" type="submit">
                </div>
            </form>
        </div>
    </div>

@stop