<section class="space-y-6 bg">
    <header>
        <h2 class="text-lg font-medium text-gray-100">
            {{ __('Borrar Cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-100">
            {{ __('Una vez que su cuenta sea borrada, toda su información y datos serán permanentemente borrados. Antes de borrar su cuenta, por favor guarde cualquier información que desee tener.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Borrar Cuenta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg text-black font-medium dark:text-gray-100">
                {{ __('Estas seguro que quieres borrar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Una vez que su cuenta sea borrada, todos sus datos serán permanentemente borrados. Por favor introduzca su contraseña para confirmar que quiere eliminar su cuenta permanentemente.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Borrar cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
