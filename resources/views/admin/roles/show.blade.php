<x-app-layout>

		<x-slot name="header">
				<form method="POST" action="{{ route('role.destroy',$role->id) }}" id="delete">
						@csrf
						{{ method_field('DELETE') }}
				</form>
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


                <div class="col-12">
                    {!! Form::open(['url' => 'admin/role/update_permissions', 'method' => 'POST', 'route' => ['role.update_permissions']]) !!}
                        {!! Form::hidden('id',$role->id) !!}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    {!! Form::label('permissions',$role->name.' Permissions:')  !!}
                                    {!! Form::select('permissions[]', $permissions, $role->permissions->pluck('id')->toArray(), ['id'=>'permissions','class' => 'form-control select2','multiple' => 'multiple']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! Form::submit('Update Permissions', ['class'=>'btn btn-light']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-12 mt-5">
                    {!! Form::open(['url' => 'admin/role/update_users', 'method' => 'POST', 'route' => ['role.update_users']]) !!}
                    {!! Form::hidden('id',$role->id) !!}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    {!! Form::label('users', 'Users with '.$role->name.' role:')  !!}
                                    {!! Form::select('users[]', $users, $role->users->pluck('id')->toArray(), ['id'=>'users', 'class' => 'form-control select2','multiple' => 'multiple']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! Form::submit('Update Users', ['class'=>'btn btn-light']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>

		</x-content>

</x-app-layout>
