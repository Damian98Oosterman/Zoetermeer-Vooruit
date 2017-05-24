<?php
use Illuminate\Support\Facades\Route;
?>
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @lang('question.read.heading')


        <h2>Questions</h2>
        <h3>@lang('question.read.column.answers')</h3>
        {{Form::model(\App\Quiz::class, ['url' => Route::currentRouteName()])}}
        @foreach($questions as $question)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>{{ $question->title }}</h5>
            </div>
            <div class="panel-body" style="text-align: left;">
              @foreach($question->answers as $answer)
                {{ Form::radio('answers['.$question->id . ']', $answer->id) }}
                {{ Form::label('answers[]', $answer->name) }}<br>
                {{ Form::close() }}
              @endforeach
            </div>
          </div>
        @endforeach{{ Form::submit(__('quiz.form.submitbtn')) }}
      </div>
    </div>
  </div>
</div>
@endsection
