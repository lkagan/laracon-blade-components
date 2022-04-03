@props(['error' => null])

<div>
    {{ $slot }}
</div>

@if ($error)
    <div class="text-red-500">{{ $error }}</div>
@endif
