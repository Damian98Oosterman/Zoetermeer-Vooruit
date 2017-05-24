@extends('layouts.app')
@section('content')
  <script src="{{asset('bower_components/tinymce/tinymce.js')}}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>tinymce.init({ selector:'textarea',
  content_css: 'https://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
  noneditable_noneditable_class: 'fa',
  toolbar: 'fontawesome forecolor backcolor',
  plugins: 'fontawesome noneditable textcolor',
  textcolor_cols: "5",
  extended_valid_elements: 'span[*]' });</script>
<section class="color-white">
  <div class="container">
      <form class="" action="{{$route}}" method="post">
        {{ csrf_field() }}
        <h2>{{$title}}</h2>
        <textarea name="html">{!! Storage::get($file) !!}</textarea>
        <button type="submit" name="button">Submit</button>
      </form>
  </div>
</section>

@endsection
