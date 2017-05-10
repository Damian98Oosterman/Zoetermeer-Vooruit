@extends('layouts.app')
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>tinymce.init({ selector:'textarea' });</script>
    <script>
    $(document).ready(function(){
        var images=["{{ asset('img/background/01.jpg') }}",
                    "{{ asset('img/background/02.jpg') }}",
                    "{{ asset('img/background/03.jpg') }}",
                    "{{ asset('img/background/04.jpg') }}",];

            var randomNumber = Math.floor(Math.random() * images.length);
            var bgImg = 'url(' + images[randomNumber] + '';

            $('header').css({'background-image':bgImg, 'background-size':'cover',});
    });

    </script>

<header>
  <center>
  <div class="dark">
    <img src="{{ asset('img\logo\logo-large.png') }}" width="500" class="img-responsive">
    <h1 class="title">Omdat het ook anders kan!</h1>
  </div>
</header>
<section class="color-white">
  <div class="container">
    {!! Storage::get('home.txt') !!}
  </div>
</section>

@endsection
