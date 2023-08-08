@extends('site.layout')
@section('title','Pagina Contatp')
@section('content')
<div class="row container">
    <div class="col s12">
        <h1 class="flow-text blue-text">Entre em Contato</h1>
    </div>

    <div class="col s12">
        <p>Dias de funcionamento: <br>
           Seg a Sexta - 08:00 às 22:00
        </p>
        <p>Telefone : (71)996236982
            E-mail: luandeivison.java@gmail.com
        </p>
        <p>Endereço: Rua Major Tapioca n°39 - Simões Filho - BA</p>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.889120995062!2d-38.391992224787295!3d-12.78570855609937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7166b4fee2981c3%3A0x4dd5bb71efbfb68e!2sR.%20Maj.%20Tapioca%2C%2039%20-%20Alto%20da%20Boa%20Vista%2C%20Sim%C3%B5es%20Filho%20-%20BA%2C%2043700-000!5e0!3m2!1spt-BR!2sbr!4v1690742869000!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="row container">
    <div class="col s12">
        <form action="{{ route('novocontato') }}" method="post">
            @csrf
            <div class="row">

                <div class="col s12 m6 input-field">
                    <i class="material-icons small prefix">account_box</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Seu Nome</label>
                </div>

                <div class="col s12 m6 input-field">
                    <i class="material-icons small prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Seu E-mail</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons small prefix">insert_comment
                    </i>
                    <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Menssagem</label>
                </div>

                <div class="col s12 input-field">
                    <button type="submit" class="btn btn-small blue">Enviar</button>
                    <button type="reset" class="btn btn-small indigo">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
