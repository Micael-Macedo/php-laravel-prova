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
<a href="{{route('state.create')}}">Criar</a>

<form action="/state" method="post">
    @csrf
    <label for="">Nome</label>
    <input name="name">
    <input name="acronym">
    <button>Enviar</button>
</form>
</body>
</html>
