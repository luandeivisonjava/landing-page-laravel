<div class="page-footer black">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <p class="flow-text">Area de footer</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iusto error placeat cum possimus ducimus.
                </p>
            </div>

            <div class="col s12 m6 l4 push-l2">
                <ul>
                    <li><a href="{{ route('home') }}" class="white-text">Home</a></li>
                    <li><a href="{{ route('servicos') }}" class="white-text">Serviços</a></li>
                    <li><a href="{{ route('galeria') }}" class="white-text">Galeria</a></li>
                    <li><a href="{{ route('contato') }}" class="white-text">Contato</a></li>
                </ul>
            </div>
            </div>
            <div class="footer-copyright">
                <div class="container center-align">
                    <p>{{ date('Y') }} Todos os direitos Reservados</p>
                </div>
            </div>
    </div>
</div>
