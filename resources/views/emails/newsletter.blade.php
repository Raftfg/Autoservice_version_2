@component('mail::message')

{{-- Logo --}}
{{-- <img src="{{ $logoUrl }}" alt="Logo" style="width: 150px; margin-bottom: 20px;"> --}}

{{-- Titre --}}
# Bonjour et bienvenue dans notre Newsletter !

{{-- Contenu principal --}}
{{ $content }}

@component('mail::button', ['url' => url(''), 'color' => 'primary'])
Visitez notre site
@endcomponent

Merci de votre confiance,<br>
{{ config('app.name') }}

@endcomponent
