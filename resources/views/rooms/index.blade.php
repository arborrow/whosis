<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Room index') }}
            <x-jet-button class="ml-2">
                <a href="{{ action('RoomController@create') }}">{{ __('Create room') }}</a>
            </x-jet-button>
        </div>
    </x-slot>
    <x-content>
        @if ($rooms->isEmpty())
        <p class="py-5">It is a brand new world, there are no rooms!</p>
        @else
        <table class="table-auto min-w-max w-full">
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                    <th class="p-2 border-r-2 border-gray-500">Room</th>
                    <th class="p-2 border-r-2 border-gray-500">School</th>
                    <th class="p-2 border-r-2 border-gray-500">Description</th>
                    <th class="p-2">Capacity</th>
                </tr>

            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($rooms as $room)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="p-2 border-r-2 border-gray-500"><a href="{{URL('room/'.$room->room_id)}}">{{ $room->title }}</a></td>
                    <td class="p-2 border-r-2 border-gray-500"><a href="{{ URL('school/'.$room->school_id) }}">{{ $room->school->title }}</a></td>
                    <td class="p-2 border-r-2 border-gray-500">{{ $room->description }}</td>
                    <td class="p-2">{{ $room->capacity }}</td>
                </tr>
                @endforeach
                {!! $rooms->render() !!}
            </tbody>
        </table>
        @endif
    </x-content>
</x-app-layout>
