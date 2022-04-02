@props(['label', 'error' => null])

<div>
    <label for="">{{ $label }}</label>
    {{ $slot }}
</div>

@if ($error)
    <div class="text-red-500">{{ $error }}</div>
@endif
