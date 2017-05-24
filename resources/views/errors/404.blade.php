@extends('layouts.app')
@section('content')
  <script>
      function goBack() {
      window.history.back();
  }
  </script>
  <div class="text-center well col-md-8 col-md-offset-2 404-block" style="
  position: absolute;
  top: 10%;
  left: 50px;
  text-align: center;
  right: 50px;"><!-- TODO::I still need to find a proper fix for this(wont get all properties of the class i make of this style. i tried). If someone knows pls help -->
    <img src="{{ asset('img\logo\logo-large.png') }}" width="400" class="img-responsive" style="margin: 0 auto;">
    <h2 class="text-center"><strong>@lang('404.heading')</strong></h2>
    <p class="line-height-base">@lang('404.text')</p>
    <span class="help-block"></span>
    <button class="btn btn-success button-fullwidth" onclick="goBack()">@lang('404.previouspage')</button>
    <button class="btn btn-success" onclick="location.href='/';">@lang('404.homelink')</button>
</div>
@endsection
