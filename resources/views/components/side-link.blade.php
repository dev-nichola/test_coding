@props(['label' => '', 'to' => ''])

<div class="general-menu flex flex-col">
    <a href="{{ $to }}" class="flex items-center">
        <p class="font-semibold">{{ $label }}</p>
    </a>
</div>