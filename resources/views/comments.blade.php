<x-app-layout>
    <h1 class="text-white">Esta es la pagina del chat de usuarios</h1>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('Que estas pensando?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Comentar') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
<x-footer/>