@extends('layouts.app')

@section('content')
<div class="container">
	<h2>{{__('form.quiz.formtitle')}}</h2>
	{{Form::model($quiz, ['url' => '/quiz/create'])}}
		{{Form::text('title')}}
		{{Form::label('title',__('quiz.form.title'))}}
		{{Form::text('description')}}
		{{Form::label('description',__('quiz.form.description'))}}
		{{Form::submit()}}
	{{Form::close()}}
</div>
@endsection
