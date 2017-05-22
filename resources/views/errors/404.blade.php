@extends('layouts.app')
@section('content')
  <script>
function goBack() {
    window.history.back();
}
</script>
  <div class="text-center well col-md-8 col-md-offset-2" style="margin-top: -300px;
  position: absolute;
  text-align: center;
  top: 40%;
  left: 50px;
  right: 50px;"><!-- TODO::I still need to find a proper fix for this(wont get all properties of the class i make of this style. i tried). If someone knows pls help -->
    <img src="{{ asset('img\logo\logo-large.png') }}" width="400" class="img-responsive" style="margin: 0 auto;">
    <h2><bold>@lang('404.heading')</b></h2>
    <p class="line-height-base">@lang('404.text')</p>
    <span class="help-block"></span>
    <button class="btn btn-info btn-lg" onclick="goBack()">Ga terug</button>
</div>
@endsection
