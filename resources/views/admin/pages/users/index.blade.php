@extends('admin.layouts.index')
@section('content')
    <div class="container">
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
                <h2>{{ trans('translate.add_user') }}</h2>
                <form action="{{route('add_user')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>{{ trans('translate.user_name') }}</label>
                        <input type="text" name="user_name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>{{ trans('translate.user_email') }}</label>
                        <input type="email" name="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>{{ trans('translate.user_password') }}</label>
                        <input type="password" name="user_pass" class="form-control" />
                    </div>

                    <input type="submit" value="{{ trans('translate.add') }}" class="btn btn-success">
                </form>

            </div>

        </div>

        <div class="row">
            <div class="col-md-10">
                <br> <hr style="background: #0c91e5; height: 1px">
            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <h2>{{ trans('translate.all_users') }}</h2>
                <table class="table">
                    <tr>
                        <th>{{trans('translate.user_name')}}</th>
                        <th>{{trans('translate.email')}}</th>
                        <th>{{trans('translate.new_password')}}</th>
                        <th>{{trans('translate.update')}}</th>
                        <th>{{trans('translate.delete')}}</th>
                    </tr>

                    @foreach($users as $user)
                        <tr>
                            <form action="{{route('update_user')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id" value="{{$user->id}}" />
                                <td>
                                    <input type="text" name="new_name" class="form-control" value="{{$user->name}}" />
                                </td>
                                <td><input type="text" name="new_email" class="form-control" value="{{$user->email}}" /></td>
                                <td><input type="password" name="new_password" class="form-control" /></td>
                                <td><input class="btn btn-info" type="submit" value="{{trans('translate.update')}}"></td>
                            </form>
                            <form action="{{route('delete_user')}}" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id_d" value="{{$user->id}}" />
                                <td><input type="submit" class="btn btn-danger" value="{{trans('translate.delete')}}"></td>
                            </form>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop