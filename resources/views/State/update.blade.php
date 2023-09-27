@extends('layout.main')
@section('content')
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <input name="name" value="{{$state->name}}">
    <input name="acronym" value="{{$state->acronym}}">
    <button>Enviar</button>
@endsection
