@extends('layouts.app')

@section('content')
<div class="container">
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>tinymce.init({ selector:'.tinymce' });</script>
		{!!Form::open(['method' => 'post', 'url' => '/cms/create'])!!}
			<h1>@lang('cms.form.create.header')</h1>
			<span>{{$_SERVER['REQUEST_SCHEME']. '://' .$_SERVER['HTTP_HOST']}}/</span>{!!Form::text('file', "")!!}<br>
			<span>Hidden?</span>{!!Form::checkbox('hidden')!!}
			{!!Form::textarea('content', "", ['class' => 'tinymce'])!!}
			{!!Form::submit()!!}
		{!!Form::close() !!}
</div>
@endsection