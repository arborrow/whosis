<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create school') }}
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>

        <form method="POST" action="{{ route('school.store') }}" id="save">
          @csrf

            <x-jet-label for="title" :value="__('School name')" />
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />

            <x-jet-label for="principal" :value="__('Principal')" />
            <x-jet-input id="principal" class="block mt-1 w-full" type="text" name="principal" />

            <x-jet-label for="address" :value="__('Address')" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" />

            <x-jet-label for="city" :value="__('City')" />
            <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" />

            <x-jet-label for="state" :value="__('State')" />
            <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" />

            <x-jet-label for="phone" :value="__('Phone')" />
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" />

            <x-jet-label for="e_mail" :value="__('Email')" />
            <x-jet-input id="e_mail" class="block mt-1 w-full" type="text" name="e_mail" />

            <x-jet-label for="www_address" :value="__('Website')" />
            <x-jet-input id="www_address" class="block mt-1 w-full" type="text" name="www_address" />

        </form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </div>

    </x-content>
</x-app-layout>
