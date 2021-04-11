<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions index') }} ({{ $records = $permissions->isEmpty() ? 0 : $permissions->total() }} records)
            <x-jet-button class="ml-4">
                <a href="{{ action('PermissionController@create') }}">{{ __('Create permission') }}</a>
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>
        @if ($permissions->isEmpty())
        <div class="py-5">
            <p>It is a brand new world, there are no permissions!</p>
        </div>
        @else
        <x-form :action="route('permission.index')" id="permission_index" method="GET" class="flex flex-row mb-4">
                <x-form-select name="action" :label="__('Action')" :options=$actions class="max-w-md  pl-4" />
                <x-form-select name="model" :label="__('Model')" :options=$models class="max-w-md  pl-4" />
                <x-form-submit class="mb-4  pl-4">Search</x-form-submit>
        </x-form>

        <table class="table-auto min-w-max w-full">
            {{ $permissions->render() }}
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                    <th class="p-2 border-r-2 border-gray-500">{{__('Name') }}</th>
                    <th class="p-2 border-r-2 border-gray-500">{{__('Display name') }}</th>
                    <th class="p-2 border-gray-500">{{__('Description') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($permissions as $permission)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="p-2 border-r-2 border-gray-500">
                        <a href="permission/{{ $permission->id}}">{{ $permission->name }}</a>
                    </td>
                    <td class="p-2 border-r-2 border-gray-500">
                        {{ $permission->display_name }}
                    </td>
                    <td class="p-2">
                        {{ $permission->description }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

    </x-content>
</x-app-layout>
