@extends('layouts.app')

@section('content')
	<script src="{{ asset('js/app.js') }}"></script>
	<script>

	</script>
	<div class="container">
		<h2>@lang('quiz.form.formtitle')</h2>
		{{Form::model($quiz, ['url' => Route::currentRouteName()])}}
		<div>{{Form::label('title',__('quiz.form.title'))}}
			{{Form::text('title')}}</div>
		{{Form::label('description',__('quiz.form.description'))}}
		{{Form::text('description')}}<br>
		{{ Form::label('questions', __('quiz.form.question')) }}
		<input type="text" name="questions[]" id="questions">
		<div id="morequestions"></div>
		{{Form::submit('Add')}}
		{{Form::close()}}
	</div>
@endsection