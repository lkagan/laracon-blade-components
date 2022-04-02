@aware(['error'])

<input
    type="text"
    name="username"
    placeholder="Username"
    {{ $attributes->class([
    'border-2',
    'border-black-500' => ! $error,
    'border-red-500' => $error,
]) }}
/>
