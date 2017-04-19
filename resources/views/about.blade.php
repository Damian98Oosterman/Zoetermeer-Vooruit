@extends('layouts.app')
@section('content')

	{{Storage::get('about.txt')}}

@endsection
