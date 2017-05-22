@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-2">
                <div class=" well">
                        <table class="table table-responsive">
                            <thead class="thead-inverse">
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
                                            	<a href="/quiz/{{$quiz->id}}" class="btn btn-success btn-sm action-btn">@lang('quiz.read.action')</a>
												{{Form::open(['url' => 'quiz/delete'])}}
												{{Form::hidden('id', $quiz->id)}}
												{{Form::submit(__('quiz.message.delete.button'),['class' => 'btn btn-danger btn-sm action-btn'])}}
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
@endsection
