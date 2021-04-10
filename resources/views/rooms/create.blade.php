<x-app-layout>

    <!-- Validation Errors -->
    <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create room') }}
            <x-jet-button form="save" class="ml-2">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('room.store')" id="save">
            <x-form-input name="title" :label="__('Room name')" />
            <x-form-select name="school_id" :label="__('School name')" :options=$schools />
            <x-form-input name="description" :label="__('Description')" />
            <x-form-input name="capacity" :label="__('Capacity')" />
            <x-form-input name="sort_order" :label="__('Sort order')" />
        </x-form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-content>
</x-app-layout>
