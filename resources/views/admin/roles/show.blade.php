<x-app-layout>

	<x-slot name="header">
		<x-form method="DELETE" action="{{ route('role.destroy', $role->id) }}" id="delete" />
		<div class="font-semibold text-xl text-gray-800 leading-tight">
			{{ $role->name }}
			<x-jet-button class="ml-2">
				<a href="{{ URL('admin/role/'.$role->id.'/edit') }}">Edit</a>
			</x-jet-button>
			<x-jet-button form="delete">
				{{ __('Delete') }}
			</x-jet-button>
		</div>
	</x-slot>

	<x-content>
		<x-show-field :value="$role->name"> {{ __('Name') }}</x-show-field>
		<x-show-field :value="$role->display_name">{{ __('Display name') }}</x-show-field>
		<x-show-field :value="$role->description">{{ __('Description') }}</x-show-field>

		<hr class="mt-4" />

		<x-form :action="route('admin.role.update_permissions')" id="update_permissions" method="POST">
			<x-form-input name="id" type="hidden" :value="$role->id" />
			<x-form-select name="permissions" :options="$permissions" label="Permissions for:" :default="$role->permissions->pluck('id')->toArray()" multiple />
			<x-form-submit>Update permissions</x-form-submit>
		</x-form>

		<hr class="mt-4" />

		<x-form :action="route('admin.role.update_users')" id="update_users" method="POST">
			<x-form-input name="id" type="hidden" :value="$role->id" />
			<x-form-select name="users" :options="$users" label="Users for:" :default="$role->users->pluck('id')->toArray()" multiple />
			<x-form-submit>Update users</x-form-submit>
		</x-form>

	</x-content>

</x-app-layout>
