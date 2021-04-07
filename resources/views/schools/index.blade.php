<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('School index') }}
              <x-jet-button class="ml-4">
                <a href="{{ action('SchoolController@create') }}">{{ __('Create school') }}</a>
              </x-jet-button>
        </div>
    </x-slot>
    <x-content>
          @if ($schools->isEmpty())
                  <p class="py-5">It is a brand new world, there are no schools!</p>
          @else
              <table class="table-auto min-w-max w-full">
                  <thead>
                      <tr class="bg-gray-200 text-gray-600 text-left text-sm">
                          <th class="p-2 border-r-2 border-gray-500">Name</th>
                          <th class="p-2 border-r-2 border-gray-500">Principal</th>
                          <th class="p-2 border-r-2 border-gray-500">Address</th>
                          <th  class="p-2 border-r-2 border-gray-500">Phone</th>
                          <th class="p-2">Website</th>
                      </tr>

                  </thead>
                  <tbody class="text-gray-600 text-sm font-light">
                      @foreach($schools as $school)
                      <tr class="border-b border-gray-200 hover:bg-gray-100">
                          <td  class="p-2 border-r-2 border-gray-500"><a href="{{URL('school/'.$school->id)}}">{{ $school->title }}</a></td>
                          <td  class="p-2 border-r-2 border-gray-500">{{ $school->principal }}</ttext-d>
                          <td class="p-2 border-r-2 border-gray-500">{{ $school->address }}</td>
                          <td class="p-2 border-r-2 border-gray-500">{{ $school->phone }}</td>
                          <td class="p-2"><a href="{{ $school->www_address }}" class="text-blue-700 hover:text-blue-900" target="_blank">{{ $school->www_address }}</a></td>
                      </tr>
                      @endforeach
                      {!! $schools->render() !!}
                  </tbody>
              </table>
          @endif
      </x-content>
</x-app-layout>
