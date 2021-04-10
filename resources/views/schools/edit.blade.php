<x-app-layout>

    <!-- Validation Errors -->
    <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit: {{ $school->title }}
            <x-jet-button form="update" class="ml-2">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('school.update',$school->id)" id="update" method="PUT">
            <x-form-input name="title" :label="__('School name')" :default="$school->title" />
            <x-form-input name="principal" :label="__('Principal')" :default="$school->principal" />
            <x-form-input name="address" :label="__('Address')" :default="$school->address" />
            <x-form-input name="city" :label="__('City')" :default="$school->city" />
            <x-form-input name="state" :label="__('State')" :default="$school->state" />
            <x-form-input name="phone" :label="__('Phone')" :default="$school->phone" />
            <x-form-input name="e_mail" :label="__('Email')" :default="$school->email" />
            <x-form-input name="www_address" :label="__('Website')" :default="$school->www_address" />
        </x-form>

        <div class="flex items-center justify-begin mt-4">
            <x-jet-button>
                {{ __('Update') }}
            </x-jet-button>
        </div>

    </x-content>
</x-app-layout>
