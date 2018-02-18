@extends('admin.layouts.index')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Add Your Reply</h2>
            <div class="col-md-6">
                @if(Session::has('m'))
                    <?php $a=[]; $a = session()->pull('m'); ?>
                    <div class="alert alert-{{$a[0]}}">
                        {{$a[1]}}
                    </div>
                @endif
                <form action="{{route('send_reply')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Email To:</label>
                        <input type="text" value="{{$user_email->email}}" name="user_email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Message:</label>
                        <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input type="submit" class="btn btn-info" value="Reply">
                </form>
            </div>
        </div>
    </div>
@endsection