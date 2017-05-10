@extends('layouts.app')

@section('content')

<style media="screen">
body{
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url({{ asset('img/background/01.jpg') }});
}
</style>

<div class="container">
  <div class="row">
    @if(Session::has('message'))
      <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif
    @if(Session::has('error'))
      <div class="alert alert-danger">{{Session::get('error')}}</div>
    @endif

    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>@lang('dashboard.user.header')</h4></div>
        <div class="panel-body">
          @foreach ($quizzes as $quiz)
            <div class="col-md-12">
              <h3>@lang('dashboard.user.quiz')</h3>
              <div class="quiz-title col-md-8 col-sm-8 col-xs-12">
                <h5>{{$quiz->title}}</h5>
                <small>{{$quiz->description}}</small>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-10">
                <a class="quiz-button btn btn-success pull-right" type="button" name="button" style="margin-right: 25%" href="{{url('/quiz/' . $quiz->id . '/make')}}">@lang('dashboard.user.make')</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

@if (Auth::user()->admin===1)

@endif
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>@lang('dashboard.admin.header')</h4></div>
        <div class="panel-body">
          <h3>@lang('dashboard.admin.quiz')</h3>
          @foreach ($quizzes as $quiz)
            <div class="col-md-12">
              <div class="quiz-title col-md-8 col-sm-8 col-xs-12">
                <h5>{{$quiz->title}}</h5>
                <small>{{$quiz->description}}</small>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <a class="quiz-button btn btn-success pull-right" type="button" name="button" style="margin-right: 40%" href="{{url('/quiz/' . $quiz->id)}}">@lang('dashboard.admin.view')</a>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <a class="quiz-button btn btn-info pull-right" type="button" name="button" style="margin-right: 40%" href="{{url('/quiz/' . $quiz->id . '/statistics')}}">@lang('dashboard.admin.statistics')</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
