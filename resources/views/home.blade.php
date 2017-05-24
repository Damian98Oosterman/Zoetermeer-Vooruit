@extends('layouts.app')
@section('content')

  <!--<style media="screen">
  body{
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url({{ asset('img/background/01.jpg') }});
}
</style> -->
    @if(Session::has('message'))
      <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif
    @if(Session::has('error'))
      <div class="alert alert-danger">{{Session::get('error')}}</div>
    @endif
    @if (Auth::user()->admin===0)
      <div class="col-md-8 col-xs-12 col-md-offset-2 well">
        <h2>@lang('dashboard.user.header')</h2>
            <h4 style="text-align:center;"><strong>@lang('dashboard.user.quiz')</strong></h4>
            @foreach ($quizzes as $quiz)
              <div class="col-md-12 col-xs-12 col-sm-12 quiz-container">
                <div class="quiz-title col-md-8 col-sm-8 col-xs-12">
                  <h4>{{$quiz->title}}</h4>
                  <small><i>{{$quiz->description}}</i></small>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-10">
                  <a class="quiz-button btn btn-success pull-right" type="button" name="button" style="margin-right: 25%" href="{{url('/quiz/' . $quiz->id . '/make')}}">@lang('dashboard.user.make')</a>
                </div>
              </div>
            @endforeach
      </div>
    @endif

    @if (Auth::user()->admin===1)
      <div class="col-md-8 col-xs-12 col-md-offset-2 well">
          <h2>@lang('dashboard.admin.header')</h2>
            <div style="text-align: center">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <a class="quiz-button btn btn-primary" type="button" name="button" href="{{url('/home/edit')}}">@lang('dashboard.admin.home-edit')</a>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <a class="quiz-button btn btn-primary" type="button" name="button" href="{{url('/about/edit')}}">@lang('dashboard.admin.about-edit')</a>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <a class="quiz-button btn btn-primary" type="button" name="button" href="{{url('/quiz/add')}}">@lang('dashboard.admin.new-quiz')</a>
              </div>
            </div>
            <h4 style="margin-top:10%; text-align:center;"><strong>@lang('dashboard.admin.quiz')</strong></h4>
            @foreach ($quizzes as $quiz)
              <div class="col-md-12 col-sm-12 col-xs-12 quiz-container">
                <div class="quiz-title col-md-8 col-sm-8 col-xs-12">
                  <h4>{{$quiz->title}}</h4>
                  <small><i>{{$quiz->description}}</i></small>
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
    @endif
@endsection
