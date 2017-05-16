@extends('layouts.app')

@section('content')
<div class="container">
	<h1>@lang('errors.fileExists.header')</h1>
	<p>@lang('errors.fileExists.body')</p>
	<a href="{{url('/home')}}" class="btn btn-primary btn-block"><h3>@lang('errors.fileExists.link')</h3></a>
</div>
@endsection