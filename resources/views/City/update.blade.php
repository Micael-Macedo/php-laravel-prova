<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/city" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <input name="name" value="{{$city->name}}">
    <select name="state_id">
    @foreach($states as $state)
        <option value="{{$state->id}}">{{$state->name}}</option>
    @endforeach
    </select>
    <button>Enviar</button>
</form>
</body>
</html>
