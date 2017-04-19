@extends('layouts.app')
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>tinymce.init({ selector:'textarea' });</script>
<section class="color-white">
  <div class="container">
      <form class="" action="/home/edit" method="post">
        {{ csrf_field() }}
        <textarea name="html">{!! Storage::get('home.txt') !!}</textarea>
        <button type="submit" name="button">Submit</button>
      </form>
  </div>
</section>

@endsection
