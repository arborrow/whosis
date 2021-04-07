@props(['value'])

<div {{ $attributes->merge(['class' => 'pt-1 pb-1 block font-medium text-sm text-gray-700']) }}>
    <strong>{{ $slot }}</strong> : {{ $value }}
</div>
