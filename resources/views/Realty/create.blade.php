@extends('layout.main')
@section('content')
<form action="/realty" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Nome</label>
    <input type="file" name="images[]" multiple="multiple">
    <input name="address" type="text">
    <input name="comments" type="text">
    <input name="offer_type" type="checkbox">
    <input name="rooms_qt" type="number">
    <input name="toilet_qt" type="number">
    <input name="suite_qt" type="number">
    <input name="parkingspace_qt" type="number">
    <input name="value" type="number" min="1">
    <select name="state_id">
        @foreach($states as $state)
            <option value="{{$state->id}}">{{$state->name}}</option>
        @endforeach
    </select>
    <select name="city_id">
        @foreach($citys as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
    <select name="neighborhood_id">
        @foreach($neighborhoods as $neighborhood)
            <option value="{{$neighborhood->id}}">{{$neighborhood->name}}</option>
        @endforeach
    </select>
    <select name="realty_type_id">
        @foreach($realty_types as $realty_type)
            <option value="{{$realty_type->id}}">{{$realty_type->name}}</option>
        @endforeach
    </select>
    <button>Enviar</button>
</form>
@endsection
