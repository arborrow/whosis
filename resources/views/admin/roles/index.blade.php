<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles index') }} ({{ $records = $roles->isEmpty() ? 0 : $roles->total() }} records)
            <x-jet-button class="ml-4">
              <a href="{{ action('RoleController@create') }}">{{ __('Create role') }}</a>
            </x-jet-button>

        </div>
    </x-slot>
    <x-content>
      @if ($roles->isEmpty())
          <div class="py-5">
              <p>It is a brand new world, there are no roles!</p>
          </div>
      @else
          <table class="table-auto min-w-max w-full">
              {{ $roles->render() }}
              <thead>
                  <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                      <th class="p-2 border-r-2 border-gray-500">{{__('Name') }}</th>
                      <th class="p-2 border-r-2 border-gray-500">{{__('Display name') }}</th>
                      <th class="p-2 border-gray-500">{{__('Description') }}</th>
                  </tr>
              </thead>
              <tbody class="text-gray-600 text-sm font-light">
                  @foreach($roles as $role)
                  <tr class="border-b border-gray-200 hover:bg-gray-100">
                      <td class="p-2 border-r-2 border-gray-500">
                          <a href="role/{{ $role->id}}">{{ $role->name }}</a>
                      </td>
                      <td class="p-2 border-r-2 border-gray-500">
                          {{ $role->display_name }}
                      </td>
                      <td class="p-2">
                          {{ $role->description }}
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      @endif

    </x-content>
</x-app-layout>
