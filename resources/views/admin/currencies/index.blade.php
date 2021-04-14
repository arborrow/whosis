<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Currencies index') }} ({{ $records = $currencies->isEmpty() ? 0 : $currencies->total() }} records)
            <x-jet-button class="ml-4">
                <a href="{{ action('CurrencyController@create') }}">{{ __('Create currency') }}</a>
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>
        @if ($currencies->isEmpty())
        <div class="py-5">
            <p>It is a brand new world, there are no currencies!</p>
        </div>
        @else
        <table class="table-auto min-w-max w-full">
            {{ $currencies->render() }}
            <thead>

                <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                    <th class="p-2 border-r-2 border-gray-500">{{__('Country name') }}</th>
                    <th class="p-2 border-r-2 border-gray-500">{{__('Currency name') }}</th>
                    <th class="p-2 border-r-2 border-gray-500">{{__('Currency symbol') }}</th>
                    <th class="p-2 border-gray-500">{{__('Currency code') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($currencies as $currency)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="p-2 border-r-2 border-gray-500">
                        <a href="currency/{{ $currency->id}}">{{ $currency->country_name }}</a>
                    </td>
                    <td class="p-2 border-r-2 border-gray-500">
                        {{ $currency->currency_name }}
                    </td>
                    <td class="p-2 border-r-2 border-gray-500">
                        {{ $currency->currency_symbol }}
                    </td>
                    <td class="p-2">
                        {{ $currency->currency_code }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

    </x-content>
</x-app-layout>
