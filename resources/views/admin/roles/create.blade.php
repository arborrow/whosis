<x-app-layout>

    <!-- Validation Errors -->
    <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create role') }}
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>

    <x-content>
        <x-form :action="route('role.store')" id="save">
            <x-form-input name="name" :label="__('Role name')" />
            <x-form-input name="display_name" :label="__('Display name')" />
            <x-form-input name="description" :label="__('Description')" />
        </x-form>

        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>
        </div>

    </x-content>

</x-app-layout>
