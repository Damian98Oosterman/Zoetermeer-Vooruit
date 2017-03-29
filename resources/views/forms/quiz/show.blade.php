@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('strings.action')@lang('strings.quizzes')</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('strings.titleColumn')</th>
                                    <th>@lang('strings.descColumn')</th>
                                    <th>@lang('strings.startDateColumn')</th>
                                    <th>@lang('strings.endDateColumn')</th>
                                    <th>@lang('strings.actionColumn')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($quizes as $quiz){
                                        $openDate=new DateTime($quiz->open_date);
                                        $openDate=$openDate->format('d-m-Y H:m:s');
                                        $closeDate=new DateTime($quiz->closing_date);
                                        $closeDate=$closeDate->format('d-m-Y H:m:s');
                                        echo '
                                            <tr>
                                                <td>'.$quiz->quiz_title.'</td>
                                                <td>'.$quiz->description.'</td>
                                                <td>'.$openDate.'</td>
                                                <td>'.$closeDate.'</td>
                                                <td><a href="/enquete/'.$quiz->id.'/vragen">'.__('strings.action').''.__('strings.question').'</a></td>
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
