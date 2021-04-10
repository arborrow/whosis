<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{$user->name}} (<a href="mailto:{{$user->email}}">{{ $user->email }}</a>)
        </div>
    </x-slot>
    <x-content>
        <table class="table-auto min-w-max w-full">
            <caption>
                <h2>Roles and Permissions</h2< /caption>
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                    <th class="p-2 border-r-2 border-gray-500">Role name</th>
                    <th class="p-2 border-gray-500">Permissions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($user->roles as $role)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="p-2 border-r-2 border-gray-500">
                            <a href="{{ URL('admin/role/'.$role->id) }}">
                                {{ $role->name }}
                            </a>
                        </td>
                        <td class="p-2">
                            @foreach($role->permissions as $permission)
                                @if ($loop->last)
                                <a href={{ URL('admin/permission/' . $permission->id) }}>
                                    {{ $permission->name }}
                                </a>
                                @else
                                <a href={{ URL('admin/permission/' . $permission->id) }}>
                                    {{ $permission->name }}
                                </a>,
                                @endif
                                @endforeach
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </x-content>
</x-app-layout>
