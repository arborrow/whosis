<x-app-layout>

    <!-- Validation Errors -->
    <x-jet-validation-errors class="mb-4" :errors="$errors" />

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            Edit: {{ $currency->currency_name . ' ('. $currency->country_name . ')' }}
            <x-jet-button form="update" class="ml-2">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>
        <x-form :action="route('currency.update', $currency->id)" id="update" method="PUT">
            <x-form-input name="country_name" :label="__('Country name')" :default="$currency->country_name" />
            <x-form-input name="currency_name" :label="__('Currency name')" :default="$currency->currency_name" />
            <x-form-input name="currency_code" :label="__('Currency code')" :default="$currency->currency_code" />
            <x-form-input name="currency_numeric_code" :label="__('Currency numeric code')" :default="$currency->currency_numeric_code" />
            <x-form-input name="currency_decimals" :label="__('Currency decimals')" :default="$currency->currency_decimals" />
            <x-form-input name="currency_symbol" :label="__('Currency symbol')" :default="$currency->currency_symbol" />
            <x-form-input name="iso_code" :label="__('ISO Code')" :default="$currency->iso_code" />
            <x-form-input name="sort_order" :label="__('Sort order')" :default="$currency->sort_order" />
        </x-form>
        <div class="flex items-center justify-begin mt-4">
            <x-jet-button form="update">
                {{ __('Update') }}
            </x-jet-button>
        </div>
    </x-content>
</x-app-layout>
