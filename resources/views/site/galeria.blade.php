@extends('site.layout')
@section('title','Pagina Galeria')
@section('content')
<div class="row container">
    <div class="col s12">
        <h1 class="flow-text blue-text">Galeria de Fotos</h1>
    </div>
</div>

<div class="row container">
    @php
        $fotos = ['g1.jpg','g2.jpg','g3.jpg','g4.jpg','g5.jpg','g6.jpg'];
        $titulo = ['Titulo do Evento1','Titulo do Evento2','Titulo do Evento3','Titulo do Evento4','Titulo do Evento5','Titulo do Evento6'];

    @endphp
    @for ($galeria = 0; $galeria < count($fotos); $galeria++)
    <div class="col s12 m6 l4">
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('images/galeria') }}/{{ $fotos[$galeria] }}" alt="" class="responsive materialboxed">
                <span class="card-title">{{ $titulo[$galeria] }}</span>
            </div>
        </div>
    </div>

    @endfor
</div>


@endsection
