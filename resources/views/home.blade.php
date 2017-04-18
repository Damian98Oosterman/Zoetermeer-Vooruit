@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	@if(Session::has('message'))
    		<div class="alert alert-info">{{Session::get('message')}}</div>
    	@endif
    	@if(Session::has('error'))
    		<div class="alert alert-danger">{{Session::get('error')}}</div>
    	@endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is empty for now.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
