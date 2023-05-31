<x-guest-layout>
    <div class="mb-4 text-sm text-white dark:text-gray-400">
        {{ __('Has olvidado tu contraseña? No hay problema. Introduce tu dirección de e-mail y te enviaremos un correo con un link para resetear tu contraseña y que te permitira elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('E-mail')" class="text-white"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-outline-secondary ml-4">
                {{ __('Resetear contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
