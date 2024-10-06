@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque o evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p>Veja os eventos nos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
            <img src="/img/image-exemple.jpg" alt="">
                <div class="card-body">
                    <div class="card-date">06/10/2024</div>
                    <div class="card-title">{{$event->title}}</div>
                    <p class="card-participants">X participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection


