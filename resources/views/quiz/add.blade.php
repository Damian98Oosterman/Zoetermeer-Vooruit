@extends('layouts.app')

@section('content')
<div class="container">
	<h2>@lang('quiz.form.formtitle')</h2>
	{{Form::model($quiz, ['url' => '/quiz/create'])}}
		<div>{{Form::label('title',__('quiz.form.title'))}}
		{{Form::text('title')}}</div>
		{{Form::label('description',__('quiz.form.description'))}}
		{{Form::text('description')}}
		{{Form::submit()}}
	{{Form::close()}}
</div>
@endsection
