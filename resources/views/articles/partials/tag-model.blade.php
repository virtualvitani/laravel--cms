<x-modal name="create-tag" :show="$errors->additionalTagCreation->isNotEmpty()" focusable>
    <form method="post" action="{{ route('tags.store') }}" class="p-6">
        @csrf

        <h2 class="text-lg font-medium text-gray-900">Add additional Tags</h2>

        <p class="mt-1 text-sm text-gray-600">for multiple tags separate tags with comma <i>(Bussines,Travel)</i></p>

        <div class="mt-6">
            <x-text-input
                id="additionalTag"
                name="additionalTag"
                type="text"
                class="mt-1 block w-3/4 p-2"
                placeholder="Bussines,Travel"
            />

            <x-input-error :messages="$errors->additionalTagCreation->get('additionalTag')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="me-3">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-algebra.button type="submit">
                {{ __('Save') }}
            </x-algebra.button>
        </div>
    </form>
</x-modal>