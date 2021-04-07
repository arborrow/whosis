@props(['value' => null, 'url' => null, 'target' => '_self'])

<div {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    <strong>{{ $slot }}</strong> : <a href={{ $url }} target={{ $target }} class="text-blue-700 hover:text-blue-900">{{ $value }}</a>
</div>
