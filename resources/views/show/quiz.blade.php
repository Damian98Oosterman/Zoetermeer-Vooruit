@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('show.quiz.nav')</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>@lang('show.title.column')</th>
                                    <th>@lang('show.desc.column')</th>
                                    <th>@lang('show.startdate.column')</th>
                                    <th>@lang('show.enddate.column')</th>
                                    <th>@lang('show.action.column')</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($quizes as $quiz){
                                        <tr>
                                            <td>{{ $quiz->id}}</td>
                                            <td>{{ $quiz->title }}</td>
                                            <td>{{ $quiz->description }}</td>
                                            <td>{{ $quiz->open_date }}</td>
                                            <td>{{ $quiz->closing_date }}</td>
                                            <td><a href="/quiz/{{$quiz->id}}/questions">@lang('show.action.name') @lang('show.question.link').'</a></td>
                                        </tr>
                                    }
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
