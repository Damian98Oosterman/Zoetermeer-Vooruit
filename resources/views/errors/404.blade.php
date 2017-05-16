@extends('layouts.app')

@section('content')
<div class="container">
	<h1>@lang('errors.404.header')</h1>
	<p>@lang('errors.404.body')</p>
	<a href="{{url('/home')}}" class="btn btn-primary btn-block"><h3>@lang('errors.404.link')</h3></a>
</div>
@endsection