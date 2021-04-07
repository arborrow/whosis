<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit: {{ $room->title }}
            <x-jet-button form="update">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>

          <form method="POST" action="{{ route('room.update',$room->room_id) }}" id="update">
            @csrf
            {{ method_field('PUT') }}

              <x-jet-label for="title" :value="__('Room name')" />
              <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$room->title" required autofocus />

              <x-jet-label for="school_id" :value="__('School ID')" />
              <x-jet-input id="school_id" class="block mt-1 w-full" type="text" name="school_id" :value="$room->school_id"/>

              <x-jet-label for="description" :value="__('Description')" />
              <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$room->description"/>

              <x-jet-label for="capacity" :value="__('Capacity')" />
              <x-jet-input id="capacity" class="block mt-1 w-full" type="text" name="capacity" :value="$room->capacity"/>

              <x-jet-label for="sort_order" :value="__('Sort order')" />
              <x-jet-input id="sort_order" class="block mt-1 w-full" type="text" name="sort_order" :value="$room->sort_order"/>

          </form>

          <div class="flex items-center justify-begin mt-4">
              <x-jet-button>
                  {{ __('Update') }}
              </x-jet-button>
          </div>

    </x-content>
</x-app-layout>
