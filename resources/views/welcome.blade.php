<x-layout>
    <form action="/" method="post" class="space-y-4"> @csrf
        <x-input.group label="Username">
            <x-input.text
                :error="$errors->first('username')"
                class="text"
                name="username"
                placeholder="Username"
            ></x-input.text>
        </x-input.group>
    </form>
</x-layout>
