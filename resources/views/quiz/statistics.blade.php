@extends('layouts.app')
@section('content')
  <script src="{{asset("bower_components/chart.js/dist/Chart.min.js")}}" charset="utf-8"></script>
@if (Auth::user()->admin===0)
  <? header("Locaction: /welcome"); ?>
@else
      <div class="container well" id="chart">
        <h2>{{$quiz->title}}</h2>
      </div>
@endif
@endsection
