<x-mail::message>
# Mensagem de {{ $data['name'] }}

<x-mail::panel>
    Lembre-se de Responder o Cliente o mais rapido possivel <br>
    Att: A direção !!!
</x-mail::panel>

E-mail: {{ $data['email'] }} <br>
Mensagem: <br>
{{ $data['message'] }}

<x-mail::button :url="''">
Acesso ao Site
</x-mail::button>

{{ date('d/m/Y') }}<br>
{{ config('app.name') }}
</x-mail::message>
