@props(['label', 'error' => null])

<div>
    <label for=""
       {{ $label->attributes->class('block text-gray-600 mb-1') }}
    >{{ $label }}</label>
    {{ $slot }}
</div>

@if ($error)
    <div class="text-red-500">{{ $error }}</div>
@endif
