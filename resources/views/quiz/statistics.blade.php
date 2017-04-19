@extends('layouts.app')
@section('content')
  <script src="{{asset("bower_components/chart.js/dist/Chart.min.js")}}" charset="utf-8"></script>

      <div class="container" id="chart">
        <h2>{{$quiz->name}}</h2>
      </div>

@endsection
