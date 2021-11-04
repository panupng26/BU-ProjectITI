@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('สวัสดีครับ')
@endif
@endif

{{-- Intro Lines --}}
<!-- @foreach ($introLines as $line)
{{ $line }}
@endforeach -->
คุณได้ส่งอีเมลมาเพื่อขอรีเซ็ตรหัสผ่านต้องการรีเซ็ตโปรดคลิกที่ลิงค์

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
{{ $actionText }}
@endcomponent
@endisset

ลิงค์รหัสผ่านสามารถดำเนินการได้ใน 60 นาที
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
@lang(
    "ถ้าไม่สามารถคลิกปุ่ม \":actionText\" กรุณาคลิกลิงค์ URL ที่อยู่ด้านล่าง\n".
    '',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
@endcomponent
