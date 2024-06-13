@props(['type' => 'text', 'id' => '', 'name' => '', 'model' => '', 'value' => ''])

<input type="{{ $type }}"  wire:model.blur='{{ $model }}' id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class' => 'w-full rounded-lg py-2 px-2 text-sm border-2 border-blue-400 bg-gray-50 text-gray-800']) }}>