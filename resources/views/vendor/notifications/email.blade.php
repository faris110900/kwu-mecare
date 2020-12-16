@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Halo Teman Afecto! verifikasi emailmu sekarang')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{-- {{ $line }} --}}
{{ "Tekan tombol dibawah untuk verifikasi" }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{-- {{ $actionText }} --}}
{{ "Verifikasi Email" }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{-- {{ $line }} --}}
{{ "Tetap semangat untuk menjalani hidup biarkan Afecto membantumu dalam kesehatan mentalmu" }}

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
@slot('subcopy')
{{-- @lang(
    "Terimakasih telah mengunjungi Afecto".
    // 'into your web browser:',
    // [
    //     'actionText' => $actionText,
    // ]
)  --}}
{{-- <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span> --}}
@endslot
@endisset
@endcomponent
