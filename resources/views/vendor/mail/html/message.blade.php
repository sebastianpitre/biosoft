<x-mail::layout>
{{-- Header --}}
<x-slot name="header">
    <a  style="display: inline-block;">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo" style="height: 40px; margin-top: 20px; margin-bottom: 20px;">
    </a>
</x-slot>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
