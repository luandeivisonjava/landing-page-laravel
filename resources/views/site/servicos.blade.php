@extends('site.layout')
@section('title','Pagina Serviços')
@section('content')
<div class="row container">
    <div class="col s12 l6 push-l3 center-align">
        <h1 class="flow-text blue-text">Nossos Serviços</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequuntur quibusdam corporis nulla atque dolore hic.</p>
    </div>
</div>
<br>

<div class="row container">
    <div class="col s12 l6">
        <div class="row">

            <div class="col s12 l6 center-align grey lighten-3">
                <i class="material-icons small blue-text">add_to_queue</i>
                <p class="flow-text">Nossos Seviços</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, at.</p>
            </div>

            <div class="col s12 l6 center-align">
                <i class="material-icons small blue-text">add_to_queue</i>
                <p class="flow-text">Nossos Seviços</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, at.</p>
            </div>

            <div class="col s12 l6 center-align">
                <i class="material-icons small blue-text">add_to_queue</i>
                <p class="flow-text">Nossos Seviços</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, at.</p>
            </div>

            <div class="col s12 l6 center-align grey lighten-3">
                <i class="material-icons small blue-text">add_to_queue</i>
                <p class="flow-text">Nossos Seviços</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, at.</p>
            </div>

        </div>
    </div>
    <div class="col s12 l6">
        <img src="{{ asset('images/work.jpg') }}" alt="" class="responsive-img materialboxed ">
    </div>
</div>

<br>

<div class="row container">
    <div class="col s12 center-align">
        <h1 class="flow-text blue-text">Planos</h1>
    </div>
    <br>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="material-icons medium ">monetization_on</i>
            </div>
            <div class="card-content">
                <span class="card-title">Basic R$89,90</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Iste itaque incidunt blanditiis animi quibusdam?</p>
            </div>
            <div class="card-action">
                <a href="#">Saiba Mais!</a>
            </div>
        </div>
    </div>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="material-icons medium">work</i>
            </div>
            <div class="card-content">
                <span class="card-title">Profissional R$189,90</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Iste itaque incidunt blanditiis animi quibusdam?</p>
            </div>
            <div class="card-action">
                <a href="#">Saiba Mais!</a>
            </div>
        </div>
    </div>

    <div class="col s12 l4 hoverable">
        <div class="card center-align">
            <div class="card-image">
                <i class="material-icons medium blue-text">business</i>
            </div>
            <div class="card-content">
                <span class="card-title">Premium R$289,90</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Iste itaque incidunt blanditiis animi quibusdam?</p>
            </div>
            <div class="card-action">
                <a href="#">Saiba Mais!</a>
            </div>
        </div>
    </div>
</div>


@endsection
