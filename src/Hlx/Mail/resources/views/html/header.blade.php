@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Hlx')
<img src="https://hlx.com/img/notification-logo.png" class="logo" alt="Hlx Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
