@extends('layouts.app')

@section('content')
<div class="container">
	@if(Storage::exists($page->file) && md5(Storage::get($page->file)) === $page->hash)
		<div class="panel cms-panel">
				<div class="panel-heading">@lang('util.by') {{App\User::find($page->owner)->name}} @lang('util.at') {{$page->created_at}}</div>
				<div class="panel-body">{!!Storage::get($page->file)!!}</div>
		</div>
	@else 
		<h2>@lang('cms.load.error')</h2>
	@endif
	@if(Auth::user() != null&&Auth::user()->admin)
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>tinymce.init({ selector:'.tinymce' });</script>
		{!!Form::open(['method' => 'post', 'url' => '/cms/edit'])!!}
			<h1>@lang('cms.form.edit.header')</h1>
			{!!Form::textarea('content', Storage::get($page->file), ['class' => 'tinymce'])!!}
			{!!Form::hidden('file', $page->file)!!}
			{!!Form::submit()!!}
		{!!Form::close() !!}
	@endif
</div>
@endsection