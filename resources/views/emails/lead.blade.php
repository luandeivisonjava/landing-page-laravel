<x-mail::message>
# Voce recebeu um novo Lead!!!

<p>
    Nome: {{ $data['name'] }} <br>
    Telefone {{ $data['tel'] }} <br>
    Email: {{ $data['email'] }}
</p>

<x-mail::button :url="''">
Acesse o site por aqui!
</x-mail::button>

{{ date('d/m/y') }}<br>
{{ config('app.name') }}
</x-mail::message>
