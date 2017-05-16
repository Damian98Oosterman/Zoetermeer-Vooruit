@extends('layouts.app')

@section('content')

<div class="container">
	<div class="panel">
	<div class="panel-heading">
		@lang('user.list.title')
	</div>
	<div class="panel-body">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>
					@lang('user.list.first_name')
				</th>
				<th>
					@lang('user.list.last_name')
				</th>
				<th>
					@lang('user.list.uuid')
				</th>
				<th>
					@lang('user.list.email')
				</th>
				<th>
					@lang('user.list.actions')
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->first_name ?? 'No data'}}</td>
					<td>{{$user->last_name ?? 'No data'}}</td>
					<td>{{$user->uuid ?? 'No data'}}</td>
					<td>{{$user->email ?? 'No data'}}</td>
					<td>
						<a class="btn btn-success" href="{{url('/user/' . $user->id . '/admin')}}">@lang('user.list.promote')</a><br>
						<a class="btn btn-danger" href="{{url('/user/' . $user->id . '/demote')}}">@lang('user.list.demote')</a><br>
						<a class="btn btn-success" href="{{url('/user/' . $user->id . '/allow')}}">@lang('user.list.allow')</a><br>
						<a class="btn btn-danger" href="{{url('/user/' . $user->id . '/ban')}}">@lang('user.list.ban')</a><br>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	</div>
	</div>
</div>

@endsection
