<form wire:submit.prevent='save' class="w-1/2">

    <section class="rounded-lg px-3 py-3 shadow-lg">
        <x-form-label label="Pilih Brand" />
        <select wire:model="selectedBrand" id="brands" name="brands" class="w-full rounded-lg border-2 border-blue-400 bg-gray-50 px-2 py-2 text-sm text-gray-800">
            <option value="">-- Pilih Brand --</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
        <x-form-error key="selectedBrand" />
    </section>
   
    <section class="mt-4 rounded-lg px-3 py-3 shadow-lg">
        @foreach ($model_brands as $i => $brand)
        <div>
            <x-form-label label="Nama Model {{ $i + 1 }}" />
            <x-form-input id="name.{{ $i }}" name="name.{{ $i }}" model='model_brands.{{ $i }}.name' />
            <x-form-error key="model_brands.{{ $i }}.name" />
        </div>

        <div class="pt-5">
            @if ($i > 0)
            <button type="button" wire:click='removeBrandInput({{ $i }})' class="rounded-lg bg-red-500 px-3 py-3 text-sm font-semibold text-gray-100">Hapus Form</button>
            @endif
        </div>
        @endforeach

        <div class="justify-content-between flex items-center gap-5 py-4">
            <button class="rounded-md bg-teal-500 px-3 py-3 font-semibold text-gray-100" type="button" wire:click="addBrandInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
            <button type="submit" class="rounded-md bg-sky-600 px-3 py-3 font-semibold text-gray-200">
                Simpan
            </button>
        </div>
    </section>
</form>
