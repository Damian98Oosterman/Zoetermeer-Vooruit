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

<header class="landing-header" style="text-align: center">
    <img src="{{ asset('img/logo/logo-large.png') }}" width="500" class="img-responsive center-block">
    <h1 class="title">Omdat het ook anders kan!</h1>
  </header>
</div>
  <div class="container" style="width: 100%; margin-top: 0px">
    <section>
      <div class="well">
        {!! Storage::get('home.txt') !!}
      </div>
    </section>
  </div>
@endsection
