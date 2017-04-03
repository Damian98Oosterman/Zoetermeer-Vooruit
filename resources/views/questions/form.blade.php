@extends('layouts.app')

@section('content')
  <div class="container">
		<h3>@lang('question.form.title.edit')</h3>
		{{ Form::model($question) }}
			{{Form::label('title')}}
			{{ Form::text('title') }}
			{{ Form::hidden('id', $question->id) }}
				@foreach($question->answers as $answer)
					<div>
					{{ Form::label('answer[]', __('question.form.option') . " " 	. $answer->id) }}
			  	{{ Form::text('answer[' . $answer->id . ']', $answer->name) }}
				</div>
		  	@endforeach
				{{Form::submit()}}
	  	{{ Form::close() }}
 	</div>
@endsection
