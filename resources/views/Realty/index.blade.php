@extends('layout.main')
@section('content')
<a href="{{route('realty.create')}}">Criar novo</a>
        <div class="container d-flex align-items-center justify-content-between mt-4">
    @foreach($realtys as $realty)
            <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                @if($realty->images)
                    @foreach($realty->images as $image)
                        @if($image->isThumbnail == 1)
                            <img class="object-fit-cover border-primary-subtle border" src="/{{$image->filepath}}" alt=""/>
                        @endif
                    @endforeach
                @endif
                <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                    <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">{{$realty->value}}/Mês</span>
                    <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                        <span>Casa</span>
                        <h3 class="fw-normal fs-5">{{$realty->address}}</h3>
                        <hr class="w-100 bg-dark-subtle">
                        <div class="d-flex flex-wrap">
                            <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                <img src="assets/img/door_icon.svg" alt="">
                                <span>{{$realty->parkingspace_qt}} Vagas</span>
                            </div>
                            <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                <img src="assets/img/area_icon.svg" alt="">
                                <span>60 m<sup>2</sup></span>
                            </div>
                            <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                <img src="assets/img/bathroom_icon.svg" alt="">
                                <span>{{$realty->toilet_qt}} Bnh.</span>
                            </div>
                            <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                <img src="assets/img/bed_icon.svg" alt="">
                                <span>{{$realty->rooms_qt}} Dorms.</span>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach
            </div>
@endsection
