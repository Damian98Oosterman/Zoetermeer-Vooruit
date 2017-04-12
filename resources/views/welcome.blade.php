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
            console.log(bgImg);
            console.log(randomNumber);
    });

    </script>

<div id="homepage">
<header>
  <div class="dark">
  <center>
    <img src="{{ asset('img\logo\LogoLarge.png') }}" width="500" class="img-responsive">
    <h1 class="yellowHeader">Omdat het ook anders kan!</h1>
  </div>
</header>
</div>
<section class="color-white">
  <div class="container">
      <br>
      <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
  </div>
</section>

@endsection
