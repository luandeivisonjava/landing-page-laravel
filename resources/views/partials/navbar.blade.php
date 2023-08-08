<nav class="black">
    <div class="nav-wrapper container">

        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="{{ route('home') }}" class="brand-logo">LD Develop</a>

        {{-- Menu Desktop --}}

        <ul class="right hide-on-med-and-down">
             <li><a href="{{ route('home') }}">Home</a></li>
             <li><a href="{{ route('servicos') }}">Serviços</a></li>
             <li><a href="{{ route('galeria') }}">Galeria</a></li>
             <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

        {{-- menu mobile --}}

        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="{{ asset('images/side-nav.jpg') }}">
              </div>
              <a href="#name"><span class="white-text name">LD Develop</span></a>
              <a href="#email"><span class="white-text email">luandeivison.java@gmail.com</span></a>
            </div></li>
            <li><a href="#!">Menu</a></li>
            <li><div class="divider"></div></li>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
          </ul>


    </div>
</nav>
