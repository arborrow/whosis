@if($label)
    <span {!! $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) !!}>{{ $label }}</span>
@endif
