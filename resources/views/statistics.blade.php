@extends('layouts.app')
@section('content')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  <script src="{{ asset('bower_components/chart.js/dist/utils.js') }}"></script>

  <div class="chart">
    <center>
    <h1>[QUIZ_NAME]</h2>
      <div class="">
        <h3>[QUESTION_NAME]</h3>
        <div id="canvas-holder" style="width:40%">
            <canvas id="chart-area0" />
        </div>
      </div>

        <div class="">
          <h3>[QUESTION_NAME]</h3>
          <div id="canvas-holder" style="width:40%">
              <canvas id="chart-area1" />
          </div>
        </div>
      </div>
