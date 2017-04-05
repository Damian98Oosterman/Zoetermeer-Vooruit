<?php
    use Illuminate\Support\Facades\Route;
?>
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
                                <th>Questions</th>
                                <th>@lang('question.read.column.answers')</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{Form::model(\App\Quiz::class, ['url' => Route::currentRouteName()])}}
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $question->title }}</td>
                                    <td>
                                        @foreach($question->answers as $answer)
                                            {{ Form::radio('answers['.$question->id . ']', $answer->id) }}
                                            {{ Form::label('answers[]', $answer->name) }}<br>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td><br>{{ Form::submit(__('quiz.form.submitbtn')) }}</td>
                            </tr>
                            {{ Form::close() }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection