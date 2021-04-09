<div class="@if($type === 'hidden') hidden @else mt-4 @endif">
    <label class="block">
        <x-form-label :label="$label" />

        <input {!! $attributes->merge([
            'class' => 'w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm' . ($label ? 'mt-1' : '')
        ]) !!}
            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
                value="{{ $value }}"
            @endif

            type="{{ $type }}" />
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
