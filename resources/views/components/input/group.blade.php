@props(['label', 'error' => null])

<div>
    <label for="">{{ $label }}</label>
    {{ $slot }}
</div>

@if ($error)
    <div class="error">{{ $error }}</div>
@endif
