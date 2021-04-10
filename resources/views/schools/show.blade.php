<x-app-layout>

	<x-slot name="header">
		<x-form method="DELETE" action="{{ route('school.destroy', $school->id) }}" id="delete" />
		<div class="font-semibold text-xl text-gray-800 leading-tight">
			{{ $school->title }}
			<x-jet-button class="ml-2">
				<a href="{{ URL('school/'.$school->id.'/edit') }}">Edit</a>
			</x-jet-button>
			<x-jet-button form="delete">
				{{ __('Delete') }}
			</x-jet-button>
		</div>
	</x-slot>

	<x-content>
		<x-show-field :value="$school->title"> {{ __('School name') }}</x-show-field>
		<x-show-field :value="$school->principal">{{ __('Principal') }}</x-show-field>
		<x-show-field :value="$school->address">{{ __('Address') }}</x-show-field>
		<x-show-field :value="$school->city">{{ __('City') }}</x-show-field>
		<x-show-field :value="$school->state">{{ __('State') }}</x-show-field>
		<x-show-field :value="$school->phone">{{ __('Phone') }}</x-show-field>
		<x-show-field :value="$school->e_mail">{{ __('Email') }}</x-show-field>
		<x-show-field-url :value="$school->www_address" :url="$school->www_address" target="_blank">{{ __('Website') }}</x-show-field>
	</x-content>

</x-app-layout>
