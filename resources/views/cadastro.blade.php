@extends('layout.main')@section('content')
<form action="" method="post">
    @csrf
    <input type="hidden" value="{{$cap}}" name="cap">
    <input name="username" type="text">
    <h2>{{$cap}}</h2>
    <input name="userCap" type="number">
    <input name="password" type="password">
    <button>Login</button>
</form>
@endsection
