@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        @lang('question.read.heading')
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>@lang('question.read.column.title')</th>
                                <th>@lang('question.read.column.answers')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $question->title }}</td>
                                    <td>
                                    <ul>
                                    	@foreach($question->answers as $answer)
                                    		<li><a href="/question/{{$question->id}}">{{$answer->name}}</a></li>
                                    	@endforeach
                                    	</ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
