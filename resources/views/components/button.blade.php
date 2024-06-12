@props(['color' => 'bg-gray-800', 'to' => ''])

<div class="flex gap-3 items-center">
    <a href="{{ $to }}"
        {{ $attributes->merge(['class' => "px-3 py-3 $color text-sm rounded-lg font-semibold text-white"]) }}>
        {{ $slot }}
    </a>
</div>
