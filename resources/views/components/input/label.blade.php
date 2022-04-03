@props(['icon' => null])
<label for="" {{ $attributes->class('block text-gray-600 mb-1 flex items-center space-x-1') }} >
    @if($icon)
        <x-dynamic-component :component="'icon.' . $icon"  class="w-5 h-5 mr-1"/>
    @endif
    <span>{{ $slot }}</span>
</label>
