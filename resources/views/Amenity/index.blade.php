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
    @foreach($amenitys as $amenity)
        <div>
            <h2>{{$amenity->name}}</h2>
            <a href="update.blade.php">Editar</a>
            <a href="show.blade.php">Ver</a>
            <form action="/city/{{$amenity->id}}">
                @method('delete')
                <button>Excluir</button>
            </form>
        </div>

    @endforeach
</body>
</html>
