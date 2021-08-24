<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>

      

        <form method="POST" action="{{ route('password.update') }}">
            @csrf


            <!-- Password Reset Token -->

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Por seguridad vuleve a introducir tu Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Crear contraseña') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
