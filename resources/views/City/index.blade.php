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
<a href="{{route('city.create')}}">Criar</a>
    @foreach($cities as $city)
        <div>
            <h2>{{$city->name}}</h2>
            <a href="update.blade.php">Editar</a>
            <a href="show.blade.php">Ver</a>
            <form action="/city/{{$city->id}}">
                @method('delete')
                <button>Excluir</button>
            </form>
        </div>

    @endforeach
</body>
</html>
