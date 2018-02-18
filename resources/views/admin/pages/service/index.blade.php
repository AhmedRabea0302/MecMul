@extends('admin.layouts.index')
@section('content')

    <head>
        <script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script>

        <style>
            table td, table th {
                padding: 10px;
                width: 20%;
            }
            table td {

            }
        </style>
    </head>
    <div class="row">
        <div class="col-md-10">
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

            <form action="{{route('update_service_mission')}}" class="form" method="post">
                <div class="form-group">
                    {!! csrf_field() !!}

                    <label class="lead">{{ trans('translate.our_services_en') }}</label>
                    <textarea name="our_services_en" rows="16" class="form-control" >{{$result->where('lang', 'en')->first()->our_services}}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.our_services_ar') }}</label>
                    <textarea name="our_services_ar" rows="16" class="form-control" >{{$result->where('lang', 'ar')->first()->our_services}}</textarea><br /><br />

                    <label class="lead">{{ trans('translate.our_mission_en') }}</label>
                    <textarea name="our_mission_en" rows="6" class="form-control" >{{$result->where('lang', 'en')->first()->our_mission}}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.our_mission_ar') }}</label>
                    <textarea name="our_mission_ar" rows="6" class="form-control" >{{$result->where('lang', 'ar')->first()->our_mission}}</textarea><br /><br />

                    <label class="lead">{{ trans('translate.our_vission_en') }}</label>
                    <textarea name="our_vision_en" rows="6" class="form-control" >{{$result->where('lang', 'en')->first()->our_vision}}</textarea><br /><br />
                    <label class="lead">{{ trans('translate.our_vission_ar') }}</label>
                    <textarea name="our_vision_ar" rows="6" class="form-control" >{{$result->where('lang', 'ar')->first()->our_vision}}</textarea><br /><br />

                    <input class="btn btn-success btn-rounded" value="{{ trans('translate.update') }}" type="submit">
                </div>
            </form>

            <hr style="background-color: #17C4BB; height: 1px; margin: 50px auto"/>
            <div class="row">
                <div class="col-md-10">
                    <form action="{{route('add_service')}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <label class="lead">{{ trans('translate.upload_for_service') }}</label>
                        <div class="add-service" style="width: 100px">
                            <input type="file"  name="upload_service_image" class="btn btn-danger">
                        </div>

                        <div class="form-group">
                            <label class="lead">{{ trans('translate.add_service_title_en') }}</label><br />
                            <input class="form-control" type="text" name="service_title_en">
                        </div>
                        <div class="form-group">
                            <label class="lead">{{ trans('translate.add_service_title_ar') }}</label><br />
                            <input class="form-control" type="text" name="service_title_ar">
                        </div>

                        <div class="form-group">
                            <label class="lead">{{ trans('translate.add_service_desc_en') }}</label><br />
                            <input type="text" class="form-control" name="service_description_en">
                        </div>
                        <div class="form-group">
                            <label class="lead">{{ trans('translate.add_service_desc_ar') }}</label><br />
                            <input type="text" class="form-control" name="service_description_ar">
                        </div>

                        <input type="submit" value="{{ trans('translate.upload_for_service') }}" class="btn btn-success"/>
                    </form>
                    <hr style="background-color: #17C4BB; height: 1px; margin: 50px auto"/>
                </div>
            </div>
            <hr />
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            @if(session('m'))
                <div  class="alert alert-{{session('m')}}">
                    {{session('x')}}
                </div>
            @endif
            <h3>{{ trans('translate.all_services') }}</h3>
            <table style="width: 100%">
                <tr>
                    <th>{{ trans('translate.service_image') }}</th>
                    <th>{{ trans('translate.service_title') }}</th>
                    <th>{{ trans('translate.service_desc') }}</th>
                    <th>{{ trans('translate.update') }}</th>
                    <th>{{ trans('translate.delete') }}</th>
                </tr>

                @foreach($all_services as $one_service)

                    <tr>
                        <form action="{{route('update_one_service')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$one_service->id}}"/>
                            <td width="50%">
                                <img  height="120" src="{{url('storage/uploads/services/')}}/{{$one_service->image_name}}">
                                <input type="file" class="btn btn-info" name="imageName" value="{{$one_service->image_name}}" />
                            </td>
                            <td><input class="form-control" type="text" name="service_title" value="{{$one_service->getDetails()->where('lang', 'en')->first()->service_title}}"></td>
                            <td><textarea class="form-control" rows="5" name="service_description" >{{$one_service->getDetails()->where('lang', 'en')->first()->service_description}}</textarea></td>
                            <td><input type="submit" class="btn btn-success" value="Update" /></td>
                        </form>

                        <td style="width: 15px;">
                            <form action="{{route('delete_one_service')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="{{$one_service->id}}">
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@stop