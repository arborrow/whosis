<x-app-layout>

    <!-- Validation Errors -->
    <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create currency') }}
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>

        </div>
    </x-slot>

    <x-content>
        <x-form :action="route('currency.store')" id="save">
            <x-form-input name="country_name" :label="__('Country name')" />
            <x-form-input name="currency_name" :label="__('Currency name')" />
            <x-form-input name="currency_code" :label="__('Currency code')" />
            <x-form-input name="currency_numeric_code" :label="__('Currency numeric code')" />
            <x-form-input name="currency_decimals" :label="__('Currency decimals')" />
            <x-form-input name="currency_symbol" :label="__('Currency symbol')" />
            <x-form-input name="iso_code" :label="__('ISO Code')" />
            <x-form-input name="sort_order" :label="__('Sort order')" />
        </x-form>

        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="save">
                {{ __('Save') }}
            </x-jet-button>
        </div>

    </x-content>

</x-app-layout>
