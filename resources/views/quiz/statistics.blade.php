@extends('layouts.app')
@section('content')
  <script src="{{asset("bower_components/chart.js/dist/Chart.min.js")}}" charset="utf-8"></script>

  <div class="chart">
    <center>
    <h1>[QUIZ_NAME]</h2>
      <div class="">
        <h3>[QUESTION_NAME]</h3>
        <div id="canvas-holder" style="width:40%">
            <canvas id="chart-area" />
        </div>
      </div>
      </div>

@endsection
