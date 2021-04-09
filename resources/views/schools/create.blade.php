<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create school') }}
            <x-jet-button form="save" class="ml-2">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('school.store')" id="save">
              <x-form-input name="title" :label="__('School name')" />
              <x-form-input name="principal" :label="__('Principal')" />
              <x-form-input name="address" :label="__('Address')" />
              <x-form-input name="city" :label="__('City')" />
              <x-form-input name="state" :label="__('State')" />
              <x-form-input name="phone" :label="__('Phone')" />
              <x-form-input name="e_mail" :label="__('Email')" />
              <x-form-input name="www_address" :label="__('Website')" />
              <div class="justify-begin mt-4">
                  <x-jet-button>
                      {{ __('Save') }}
                  </x-jet-button>
              </div>
        </x-form>

    </x-content>
</x-app-layout>
