<x-app-layout>

		<x-slot name="header">
			<x-form method="DELETE" action="{{ route('room.destroy', $room->room_id) }}" id="delete" />
			<div class="font-semibold text-xl text-gray-800 leading-tight">
				{{ $room->title }}
				<x-jet-button class='ml-2'>
					<a href="{{ URL('room/'.$room->room_id.'/edit') }}">Edit</a>
				</x-jet-button>
				<x-jet-button form="delete">
						{{ __('Delete') }}
				</x-jet-button>
			</div>
		</x-slot>

		<x-content>
				<x-show-field :value="$room->title"> {{ __('Room name') }}</x-show-field>
				<x-show-field :value="$room->school->title">{{ __('School ID') }}</x-show-field>
				<x-show-field :value="$room->description">{{ __('Description') }}</x-show-field>
				<x-show-field :value="$room->capacity">{{ __('Capacity') }}</x-show-field>
				<x-show-field :value="$room->sort_order">{{ __('Sort order') }}</x-show-field>
		</x-content>

</x-app-layout>
