<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('¡Hola!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'green',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
    {{ 'Restablecer contrseña' }}
</x-mail::button>

@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
<x-slot name="subcopy">
    @lang(
        "Si tiene problemas para hacer clic en el botón \"Restablecer contraseña\" , copie y pegue la siguiente URL \n".
        'en su navegador web:',
        [
            'actionText' => $actionText,
        ]
    )
    <span class="break-all text-success" style="color: green;"><a href="{{ $actionUrl }}">{{ $displayableActionUrl }}</a></span>
</x-slot>

@endisset
</x-mail::message>
