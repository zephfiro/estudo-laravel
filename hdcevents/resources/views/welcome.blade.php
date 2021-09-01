@extends('layouts.main')

@section('title','HDC Events')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja o Evento dos Próximos dias!</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            @if($event->image!=null)
            <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
            @else
            <img src="https://s2.glbimg.com/eU-vV0sd3R3d76Rk4QS10JrY7ig=/0x0:1280x720/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/D/K/2Tzo83RrykgdNtB8mZGQ/pokemon-unite.jpg" alt="{{ $event->title }}">
            @endif
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection