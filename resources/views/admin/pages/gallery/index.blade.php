@extends('admin.layouts.index')
@section('content')
    <style>
        table tr td {
            padding-bottom: 20px;
        }
    </style>
    <div class="row">

        <div class="col-md-6">
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

            <form action="{{route('gallery_add')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <h3 class="lead">{{ trans('translate.upload_image') }}</h3>
                <input type="file" name="gallery_image" value="Upload Image"/>
                <input style="margin-top: 15px" class="btn btn-success" type="submit" name="sub" value="{{ trans('translate.add') }}" />
            </form>
        </div>
    </div>
    <br/>
    <hr style="background: #17C4BB; height: 1px" />
    <div class="row">
        <div class="col-md-12">
            <table width="60%">
                <tr>
                    <th style="width: 30%">{{ trans('translate.image') }}</th>
                    <th>{{ trans('translate.upload_image') }}</th>
                    <th>{{ trans('translate.update') }}</th>
                    <th>{{ trans('translate.delete') }}</th>
                </tr>

                @foreach($selectGallery as $gallery)
                    <tr>
                        <td>
                            <img height="130px" width="120px" src="{{url('storage/uploads/gallery/')}}/{{$gallery->image_name}}">
                        </td>


                        <form action="{{route('update_gallery')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$gallery->id}}" />
                            <td><input type="file" name="image" class="btn btn-info" /></td>
                            <td><input class="btn btn-success" value="{{ trans('translate.update') }}"  type="submit"></td>
                        </form>

                        <td>
                            <form action="{{route('delete_gallery')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="{{$gallery->id}}" />
                                <input type="submit" value="{{ trans('translate.delete') }}" class="btn btn-danger" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop