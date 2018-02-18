@extends('admin.layouts.index')
@section('content')
    <style>
        table td, table tr {
            padding:20px;
        }
    </style>

    <div class="row">

        <div class="col-md-12">
            @if(Session::has('m'))
                <?php $a=[]; $a = session()->pull('m'); ?>
                <div class="alert alert-{{$a[0]}}">
                    {{$a[1]}}
                </div>
            @endif
            <h1 class="lead">{{ trans('translate.all_messages') }}</h1>
            <table width="100%">
                <tr>
                    <th>{{ trans('translate.sender_name') }}</th>
                    <th>{{ trans('translate.phone_number') }}</th>
                    <th>{{ trans('translate.sender_email') }}</th>
                    <th>{{ trans('translate.sender_message') }}</th>
                    <th>{{ trans('translate.reply') }}</th>
                    <th>{{ trans('translate.delete') }}</th>
                </tr>

                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->phone_number}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                        <td><a href="{{route('reply', $id = $message)}}" class="btn btn-success">{{ trans('translate.reply') }}</a></td>
                        <td><a href="{{route('delete_message', $id = $message->id)}}" class="btn btn-danger">{{ trans('translate.delete') }}</a></td>
                    </tr>
                @endforeach
            </table>
            <hr style="background: #0b94ea; height: 1px" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN FORM-->
            <form action="{{route('update_contact_info')}}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <input type="hidden" name="id" value="{{$contact->id}}" />
                    <h2 class="lead">{{ trans('translate.contact_info') }}</h2>
                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('translate.sales_number') }}</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-circle" name="sales_number" value="{{$contact->sales_number}}" placeholder="Enter text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('translate.whatsup') }}</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-circle" name="whatsup" value="{{$contact->whatsup}}" placeholder="Enter text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('translate.email') }}</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-circle" name="email" value="{{$contact->email}}" placeholder="Enter text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('translate.address') }}</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control input-circle" name="address" value="{{$contact->address}}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">{{ trans('translate.icon') }}</label>
                        <div class="col-md-4">
                            <select class="fa form-control input-circle custom-form-control">
                                @foreach($icons as $key => $icon)
                                    <option name="font-class" value="fa {{$key}}">{{$icon}}</option>
                                @endforeach
                            </select>
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
        </div>
    </div>

@stop