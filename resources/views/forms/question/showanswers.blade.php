@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <?php
                        $heading=__('strings.answerHeadingEmpty');
                    foreach ($answers as $a){
                            $heading=__('strings.answerHeadingNotEmpty').''.$a->question_title;
                    }
                    ?>
                    <div class="panel-heading"><?php echo $heading; ?></div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>@lang('strings.nameColumn')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($answers as $answer){
                                echo '
                                    <tr>
                                        <td>'.$answer->id.'</td>
                                        <td>'.$answer->name.'</td>
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
