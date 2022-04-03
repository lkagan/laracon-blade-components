<x-layout>
    <form action="/" method="post" class="space-y-4"> @csrf
        <x-input.group label="Username" :error="$errors->first('username')" >
            <x-input.label icon="user" class="label">Username</x-input.label>
            <x-input.text
                class="text"
                name="username"
                placeholder="Username"
            ></x-input.text>
        </x-input.group>
    </form>
</x-layout>
