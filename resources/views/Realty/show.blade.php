@extends('layout.main')
@section('content')
@if($state)
    <h2>{{$state->name}}</h2>
    <h2>{{$state->acronym}}</h2>
@endif
@endsection
