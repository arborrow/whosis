<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create room') }}
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>

        <form method="POST" action="{{ route('room.store') }}" id="save">
          @csrf

            <x-jet-label for="title" :value="__('Room name')" />
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />

            <x-jet-label for="school_id" :value="__('School ID')" />
            <x-jet-input id="school_id" class="block mt-1 w-full" type="text" name="school_id" required autofocus />

            <x-jet-label for="description" :value="__('Description')" />
            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" />

            <x-jet-label for="capacity" :value="__('Capacity')" />
            <x-jet-input id="capacity" class="block mt-1 w-full" type="text" name="capacity" />

            <x-jet-label for="sort_order" :value="__('Sort order')" />
            <x-jet-input id="sort_order" class="block mt-1 w-full" type="text" name="sort_order" />

        </form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>
        </div>

    </x-content>
</x-app-layout>
