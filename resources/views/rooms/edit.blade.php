<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit: {{ $room->title }}
            <x-jet-button form="update" class="ml-2">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('room.update',$room->room_id)" id="update" method="PUT">
            <x-form-input name="title" :label="__('Room name')" :default="$room->title" />
            <x-form-select name="school_id" :label="__('School name')" :options=$schools :default="$room->school_id" />
            <x-form-input name="description" :label="__('Description')" :default="$room->description" />
            <x-form-input name="capacity" :label="__('Capacity')" :default="$room->capacity"/>
            <x-form-input name="sort_order" :label="__('Sort order')" :default="$room->sort_order" />
        </x-form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button>
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-content>
</x-app-layout>
