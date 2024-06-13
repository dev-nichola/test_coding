@props(['to' => ''])

<div class="general-menu flex flex-col">
    <a href="{{ $to }}" class="flex items-center" wire:navigate>
        <p class="text-gray-600 font-semibold text-sm">{{ $slot }}</p>
    </a>
</div>