<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PHPInfo') }}
        </div>
    </x-slot>
    <x-content>
        {!! phpinfo(); !!}
    </x-content>
</x-app-layout>
