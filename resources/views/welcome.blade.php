@extends('layouts.app')
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

<header>
  <center>
    <img src="{{ asset('img\logo\LogoLarge.png') }}" width="500" class="img-responsive">
    <h1 class="yellowHeader">Omdat het ook anders kan!</h1>
</header>
<section class="color-white">
  <div class="">
      <br>
      <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
  </div>
</section>

@endsection
