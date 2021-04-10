<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User index') }} ({{$users->total()}} records)
        </div>
    </x-slot>
    <x-content>
        @if ($users->isEmpty())
        <div class="py-5">
            <p>It is a brand new world, there are no users!</p>
        </div>
        @else

        <table class="table-auto min-w-max w-full">
            {{ $users->render() }}
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                    <th class="p-2 border-r-2 border-gray-500">{{__('Name') }}</th>
                    <th class="p-2 border-r-2 border-gray-500">{{__('Email') }}</th>
                    <th class="p-2 border-gray-500">{{__('Roles') }}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($users as $user)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="p-2 border-r-2 border-gray-500">
                        <a href="{{ URL('admin/user/' . $user->id) }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td class="p-2 border-r-2 border-gray-500">{{ $user->email }}</td>
                    <td class="p-2">
                        <ul>
                            @foreach($user->roles as $role)
                                <li>
                                    <a href="{{ URL('admin/role/'.$role->id) }}">
                                        {{ $role->name }}
                                    </a>
                                    @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

    </x-content>
</x-app-layout>
