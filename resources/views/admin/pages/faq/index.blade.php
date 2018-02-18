@extends('admin.layouts.index')
@section('content')
    <style>
        table tr, table td {
            padding: 5px;
        }
    </style>
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

            <h2 class="lead">{{ trans('translate.add_new_question') }}</h2>
            <form action="{{route('add_question')}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>{{ trans('translate.question_en') }}</label>
                    <input type="text" name="question_en" class="form-control" />
                </div>
                <div class="form-group">
                    <label>{{ trans('translate.question_ar') }}</label>
                    <input type="text" name="question_ar" class="form-control" />
                </div>

                <div class="form-group">
                    <label>{{ trans('translate.answer_en') }}</label>
                    <textarea rows="6" class="form-control" name="answer_en"></textarea>
                </div>
                <div class="form-group">
                    <label>{{ trans('translate.answer_ar') }}</label>
                    <textarea rows="6" class="form-control" name="answer_ar"></textarea>
                </div>
                <input type="submit" value="{{ trans('translate.add_question') }}" class="btn btn-success" />
            </form>
        </div>
    </div>
    <br />
    <hr style="height: 1px; background: #17C4BB"/>

    <div class="row">
        <div class="col-md-12">
            <h2 class="lead">{{ trans('translate.added_questions') }}</h2>
            <table width="100%">
                <tr>
                    <th>{{ trans('translate.questions') }}</th>
                    <th>{{ trans('translate.answer') }}</th>
                    <th>{{ trans('translate.update') }}</th>
                    <th>{{ trans('translate.delete') }}</th>
                </tr>

                @foreach($allQuestions as $question)
                    <tr>
                        <form action="{{route('update_question')}}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$question->id}}">
                            <td><input type="text" name="question_text" value="{{$question->where('lang', 'en')->first()->question}}" class="form-control"/></td>
                            <td width="40%"><textarea rows="4" class="form-control" name="answer_text">{{$question->where('lang', 'en')->first()->answer}}</textarea></td>
                            <td><input type="submit" class="btn btn-success" value="{{ trans('translate.update') }}" /></td>
                        </form>

                        <form action="{{route('delete_question')}}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$question->id}}">
                            <td><input type="submit" value="{{ trans('translate.delete') }}" class="btn btn-danger" /></td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop