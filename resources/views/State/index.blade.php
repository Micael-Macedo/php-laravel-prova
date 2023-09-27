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
    @foreach($states as $state)
        <div>
            <h2>{{$state->name}}</h2>
            <a href="update.blade.php">Editar</a>
            <a href="show.blade.php">Ver</a>
            <form action="/state/{{$state->id}}">
                @method('delete')
                <button>Excluir</button>
            </form>
        </div>

    @endforeach
</body>
</html>
