@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel well">
                    <div class="panel-heading">@lang('quiz.read.title')</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('quiz.read.column.title')</th>
                                    <th>@lang('quiz.read.column.description')</th>
                                    <th>@lang('quiz.read.column.open_date')</th>
                                    <th>@lang('quiz.read.column.close_date')</th>
                                    <th>@lang('quiz.read.column.action')</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($quizzes as $quiz)
									@php
                                        $openDate=new DateTime($quiz->open_date);
                                        $openDate=$openDate->format('d-m-Y H:m:s');
                                        $closeDate=new DateTime($quiz->closing_date);
                                        $closeDate=$closeDate->format('d-m-Y H:m:s');
									@endphp
                                       <tr>
                                            <td>{{$quiz->title}}</td>
                                            <td>{{$quiz->description}}</td>
                                            <td>{{$openDate}}</td>
                                            <td>{{$closeDate}}</td>
                                            <td>
                                            	<a href="/quiz/{{$quiz->id}}" class="btn btn-success">@lang('quiz.read.action')</a>
												{{Form::open(['url' => 'quiz/delete'])}}
												{{Form::hidden('id', $quiz->id)}}
												{{Form::submit(__('quiz.message.delete.button'),['class' => 'btn btn-danger'])}}
												{{Form::close()}}
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
