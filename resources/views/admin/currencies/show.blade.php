<x-app-layout>

	<x-slot name="header">
		<x-form method="DELETE" action="{{ route('currency.destroy', $currency->id) }}" id="delete" />
		<div class="font-semibold text-xl text-gray-800 leading-tight">
			{{ $currency->currency_name . ' (' . $currency->country_name . ')' }}
			<x-jet-button class="ml-2">
				<a href="{{ URL('admin/currency/'.$currency->id.'/edit') }}">Edit</a>
			</x-jet-button>
			<x-jet-button form="delete">
				{{ __('Delete') }}
			</x-jet-button>
		</div>
	</x-slot>

	<x-content>
		<x-show-field :value="$currency->country_name"> {{ __('Country name') }}</x-show-field>
		<x-show-field :value="$currency->currency_name">{{ __('Currency name') }}</x-show-field>
		<x-show-field :value="$currency->currency_code">{{ __('Currency code') }}</x-show-field>
		<x-show-field :value="$currency->currency_numeric_code">{{ __('Currency numeric code') }}</x-show-field>
		<x-show-field :value="$currency->currency_decimals">{{ __('Currency decimals') }}</x-show-field>
		<x-show-field :value="$currency->currency_symbol">{{ __('Currency symbol') }}</x-show-field>
		<x-show-field :value="$currency->iso_code">{{ __('ISO code') }}</x-show-field>
		<x-show-field :value="$currency->sort_order">{{ __('Sort order') }}</x-show-field>
	</x-content>

</x-app-layout>
