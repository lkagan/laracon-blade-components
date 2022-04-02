<x-layout>
    <form action="/" method="post" class="space-y-4"> @csrf
        <x-input.group
            label="Username"
            :error="$errors->first('username')"
        >
            <x-slot:label class="flex items-center space-x-1">
                <x-icon.user class="text-gray-600" />
                <span>Username</span>
            </x-slot:label>
            <x-input.text
                class="text"
                name="username"
                placeholder="Username"
            ></x-input.text>
        </x-input.group>
    </form>
</x-layout>
