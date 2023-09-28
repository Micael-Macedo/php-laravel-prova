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
<header>
    <nav>
        @if(!Auth::user())
            <a href="/login">Login</a>
            <a href="/cadastro">Cadastro</a>
        @endif
        <a href="{{route('city.index')}}">Cidades</a>
        <a href="{{route('amenity.index')}}">Amenidade</a>
        <a href="{{route('state.index')}}">Estados</a>
        <a href="{{route('neighborhood.index')}}">Vizinhança</a>
        <a href="{{route('realty.index')}}">Imovel</a>
        <a href="{{route('realtyType.index')}}">Tipo Imovel</a>
    </nav>
</header>
<div class="message">
    @if(session('msg'))
        <p>{{session('msg')}}</p>
    @endif
</div>
@yield('content')
</body>
</html>
