@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <?php
                      foreach ($questions as $q){
                          $enquete=$q->quiz_title;
                      }
                    ?>
                    <div class="panel-heading">@lang('strings.questionHeading')<?php echo $enquete; ?></div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>@lang('strings.titleColumn')</th>
                                <th>@lang('strings.actionColumn')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($questions as $question){
                                echo '
                                    <tr>
                                        <td>'.$question->id.'</td>
                                        <td>'.$question->question_title.'</td>
                                        <td><a href="/vraag/'.$question->id.'/antwoorden">'.__('strings.action').''.__('strings.answer').'</a></td>
                                    </tr>
                                ';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
