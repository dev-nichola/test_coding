<form wire:submit.prevent='save' class="w-1/2">

    @foreach ($brands as $i => $brand)
    <div wire:key="brand-{{ $i }}">
        <x-form-label label="Nama Brand {{ $i + 1 }}" />
        <x-form-input id="name.{{ $i }}" name="name.{{ $i }}"
            wire:model.defer='brands.{{ $i }}.name' />
        <x-form-error key="brands.{{ $i }}.name" />
    </div>

    <div class="pt-5" wire:key="remove-btn-{{ $i }}">
        @if ($i > 0)
        <button type="button" wire:click='removeBrandInput({{ $i }})' class="rounded-lg bg-red-500 px-3 py-3 text-sm font-semibold text-gray-100">Hapus Form</button>
        @endif
    </div>
    @endforeach

    <div class="justify-content-between flex items-center gap-5 py-4">
        <button type="submit" class="rounded-md bg-sky-600 px-3 py-3 font-semibold text-gray-200">
            Simpan
        </button>
    </div>

</form>
