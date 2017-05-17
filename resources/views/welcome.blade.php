<style media="screen">
body{
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url({{ asset('img/background/01.jpg') }});
}
</style>
@extends('layouts.app')
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <div class="dark">
    <script>tinymce.init({ selector:'textarea' });</script>

<header>
  <center>
    <img src="{{ asset('img\logo\logo-large.png') }}" width="500" class="img-responsive">
    <h1 class="title">Omdat het ook anders kan!</h1>
    <section class="color-white">
      <div class="container white-container-overlay" style="background-color: white; width: 100%; height: 100%;">
        {!! Storage::get('home.txt') !!}
      </div>
    </section>
</header>
</div>
@endsection
