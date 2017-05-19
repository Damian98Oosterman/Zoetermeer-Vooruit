@extends('layouts.app')

@section('content')
<div class="container">
	@if(Storage::exists($page->file))
		<div class="panel cms-panel">
				<h5 class="text-muted">{{$page->created_at}}</h5>
				{!!Storage::get($page->file)!!}
		</div>
	@else 
		<h2>@lang('cms.load.error')</h2>
	@endif
	@if(Auth::user()->admin)
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>tinymce.init({ selector:'.tinymce' });</script>
		<form>
			<h1>@lang('cms.form.edit.header')</h1>
			<textarea class="tinymce"></textarea>
		</form>
	@endif
</div>
@endsection