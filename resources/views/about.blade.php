@extends('layouts.app')
@section('content')
	<script src="{{asset('bower_components/tinymce/tinymce.js')}}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>tinymce.init({ selector:'textarea',
    content_css: 'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    noneditable_noneditable_class: 'fa',
    plugins: 'fontawesome noneditable',
    toolbar: 'fontawesome',
    extended_valid_elements: 'span[*]' });</script>


	<div class="container well">
	{!!Storage::get('about.txt')!!}
		</div>

@endsection
