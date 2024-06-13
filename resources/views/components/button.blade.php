@props(['color' => 'bg-gray-800', 'to' => ''])

<div class="flex items-center gap-3">
    <a href="{{ $to }}"
        {{ $attributes->merge(['class' => "px-3 py-3 $color text-sm rounded-lg font-semibold text-white"]) }} wire:navigate>
        {{ $slot }}
    </a>
</div>
