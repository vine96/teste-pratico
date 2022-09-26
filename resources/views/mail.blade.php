@component('mail::message')

  <p>Parabéns, você acaba de se inscrever para garantir o acesso a nossa newsletter!</p>

  @component('mail::button', ['url' => 'https://google.com.br'])
  Acessar site
  @endcomponent

Sempre que precisar, conte com a gente da {{ config('app.name') }}!<br>
@endcomponent
