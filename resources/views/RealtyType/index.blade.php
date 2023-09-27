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
<a href="{{route('realtyType.create')}}">Criar</a>
    @foreach($realtyTypes as $realtyType)
        <div>
            <h2>{{$realtyType->name}}</h2>
            <a href="update.blade.php">Editar</a>
            <a href="show.blade.php">Ver</a>
            <form action="/realtyTpe/{{$realtyType->id}}">
                @method('delete')
                <button>Excluir</button>
            </form>
        </div>

    @endforeach
</body>
</html>
