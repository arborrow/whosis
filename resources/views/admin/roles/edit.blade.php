<x-app-layout>

          <!-- Validation Errors -->
          <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit: {!! $role->name !!}
            <x-jet-button form="update" class="ml-2">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('role.update', $role->id)" id="update" method="PUT">
            <x-form-input name="id" type="hidden" :value="$role->id" />
            <x-form-input name="name" :label="__('Role name')" :default="$role->name" />
            <x-form-input name="display_name" :label="__('Display name')" :default="$role->display_name" />
            <x-form-input name="description" :label="__('Description')" :default="$role->description"/>
        </x-form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="update">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-content>
</x-app-layout>
