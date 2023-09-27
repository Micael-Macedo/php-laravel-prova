@extends('layout.main')
@section('content')
<form action="/state" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <input name="name" value="{{$state->name}}">
    <input name="acronym" value="{{$state->acronym}}">
    <button>Enviar</button>
</form>
@endsection
