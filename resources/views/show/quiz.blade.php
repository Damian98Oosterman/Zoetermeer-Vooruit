@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('show.quiz.nav')</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>@lang('show.title.column')</th>
                                    <th>@lang('show.desc.column')</th>
                                    <th>@lang('show.startdate.column')</th>
                                    <th>@lang('show.enddate.column')</th>
                                    <th>@lang('show.action.column')</th>
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
                                                <td>'.$quiz->id.'</td>
                                                <td>'.$quiz->quiz_title.'</td>
                                                <td>'.$quiz->description.'</td>
                                                <td>'.$openDate.'</td>
                                                <td>'.$closeDate.'</td>
                                                <td><a href="/quiz/'.$quiz->id.'/questions">'.__('show.action.name').' '.__('show.question.link').'</a></td>
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
