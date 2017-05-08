@extends('layouts.app')

@section('content')
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
                  <h3>@lang('dashboard.user.quiz')</h3>
                  <div class="panel panel-default">
                    <div class="col-md-8 col-sm-4 col-xs-12">
                    <h5>[QUIZ_TITLE_PLACEHOLDER]</h5>
                    <small>[QUIZ_DESCRIPTION_PLACEHOLDER]</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-10">
                    <button class="btn pull-right" type="button" name="button" style="margin-right: 25%">Maak Quiz</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
