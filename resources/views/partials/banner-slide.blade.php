<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{ asset('images/banner-1.jpg') }}" alt="">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit praesentium odio, consectetur facilis nam error.</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>
        <li>
            <img src="{{ asset('images/banner-2.jpg') }}" alt="">
            <div class="caption right-align">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit praesentium odio, consectetur facilis nam error.</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>
    </ul>
</div>

<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Cadastre-se</h3>

        <form action="{{ route('lead') }}" method="post">
            @csrf

            <div class="row">
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu Nome: </label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu Telefone: </label>
                </div>
                <div class="col s12 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="name">Digite seu Email: </label>
                </div>
                <div class="col s12 input-field">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="submit" value="Limpar" class="btn btn-small red">
                </div>
            </div>

        </form>
    </div>
</div>
