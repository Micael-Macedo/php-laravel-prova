@extends('layout.main')@section('content')
<form action="auth/login" method="post">
    @csrf
    <input type="hidden" value="{{$cap}}" name="cap">
    <label>Nome</label>
    <input name="username" type="text">
    <h2>{{$cap}}</h2>
    <label>Digite Cap</label>
    <input name="userCap" type="number">
    <label>Senha</label>
    <input name="password" type="password">
    <button>Login</button>
</form>
@endsection
