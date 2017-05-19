@extends('layouts.app')
@section('content')
<style media="screen">
body{
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url({{ asset('img/background/01.jpg') }});
}

</style>
  <script src="{{asset('bower_components/tinymce/tinymce.js')}}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <div class="dark">
    <script>tinymce.init({ selector:'textarea',
    content_css: 'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    noneditable_noneditable_class: 'fa',
    plugins: 'fontawesome noneditable',
    toolbar: 'fontawesome',
    extended_valid_elements: 'span[*]' });</script>

<header style="text-align: center">
    <img src="{{ asset('img/logo/logo-large.png') }}" width="500" class="img-responsive center-block">
    <h1 class="title">Omdat het ook anders kan!</h1>
  </header>
</div>
  <div class="container" style="background-color: white; width: 100%; margin-top: 0px">
    <section>
        {!! Storage::get('home.txt') !!}
    </section>
  </div>
@endsection
