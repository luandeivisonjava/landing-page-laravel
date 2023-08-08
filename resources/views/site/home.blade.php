@extends('site.layout')
@section('title','Pagina Home')
@section('content')
<div class="row container">
    <div class="col s12 center-align">
        <p class="flow-text">LD Develop</p>
    </div>
    <div class="col s12 divider"></div>

    {{-- Card 1 --}}

    <div class="col s12 m6 l4">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{ asset('images/card1.jpg') }}" alt="">
            </div>
            <div class="card-content">
                <span class="card-title">Desenvolvimento Web</span>
                <p>Focado em aplicações Web, trabalhando com as melhores
                     stacks de tecnologia do mercado.
                </p>
            </div>
            <div class="card-action">
                <a href="#">Saiba mais</a>
            </div>
        </div>
    </div>

    {{-- Card 2 --}}

    <div class="col s12 m6 l4">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{ asset('images/card2.jpg') }}" alt="">
            </div>
            <div class="card-content">
                <span class="card-title">Projetos e Sistemas</span>
                <p>Focado em aplicações Web, trabalhando com as melhores
                     stacks de tecnologia do mercado.
                </p>
            </div>
            <div class="card-action">
                <a href="#">Saiba mais</a>
            </div>
        </div>
    </div>

    <div class="col s12 m6 l4">
        <div class="card">
            <div class="card-image">
                <img class="responsive-img materialboxed" src="{{ asset('images/card3.jpg') }}" alt="">
            </div>
            <div class="card-content">
                <span class="card-title">Manutenção e Assistencia</span>
                <p>Focado em aplicações Web, trabalhando com as melhores
                     stacks de tecnologia do mercado.
                </p>
            </div>
            <div class="card-action">
                <a href="#">Saiba mais</a>
            </div>
        </div>
    </div>

</div>
<br/>

<div class="row container">
    <div class="col s12">
        <div class="divider"></div>
    </div>
</div>

<br>

<div class="row container">
    <section class="col s12 center-align">
        <h1 class="flow-text light">Nova Àrea</h1>

        <p class="flow-text light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Magni aliquid adipisci nobis. Accusamus beatae iste delectus vero quaerat.
            Nihil assumenda ut atque dolor modi? Quia sequi placeat adipisci,
            ipsam obcaecati aliquam nemo ut inventore provident eveniet perspiciatis veniam repellendus.
            Ipsum sed perspiciatis
             consequuntur beatae soluta voluptates error? Asperiores, blanditiis esse.
        </p>
        <p class="flow-text light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Magni aliquid adipisci nobis. Accusamus beatae iste delectus vero quaerat.
            Nihil assumenda ut atque dolor modi? Quia sequi placeat adipisci,
            ipsam obcaecati aliquam nemo ut inventore provident eveniet perspiciatis veniam repellendus.
            Ipsum sed perspiciatis
             consequuntur beatae soluta voluptates error? Asperiores, blanditiis esse.
        </p>
        <p>
            <a href="#" class="btn btn-small">Saiba Mais</a>
            <a href="#" class="btn btn-small purple">Cadastre-se</a>
        </p>
    </section>

</div>

<div class="parallax-container">
    <div class="parallax">
        <img src="{{ asset('images/bg-03.jpg') }}" alt="" class="responsive-img">
    </div>
</div>

<br>

<div class="row container">
    <div class="col s12 m6 l4 center-align">
        <img src="{{ asset('images/team-1.jpg') }}" alt="" class="responsive-img circle">
        <p class="flow-text">Gustavo</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, tempora.</p>
    </div>
    <div class="col s12 m6 l4 center-align">
        <img src="{{ asset('images/team-2.jpg') }}" alt="" class="responsive-img circle">
        <p class="flow-text">Maria</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, tempora.</p>
    </div>
    <div class="col s12 m6 l4 center-align">
        <img src="{{ asset('images/team-3.jpg') }}" alt="" class="responsive-img circle">
        <p class="flow-text">Pedro Gaspar</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, tempora.</p>
    </div>
</div>

@endsection
