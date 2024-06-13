<form wire:submit.prevent='save' class="w-1/2">

    <section class="mt-4 rounded-lg px-3 py-3 shadow-lg">
        @foreach ($model_brands as $i => $brand)
        <div>
            <x-form-label label="Nama Model {{ $i + 1 }}" />
            <x-form-input id="name.{{ $i }}" name="name.{{ $i }}" wire:model.defer='model_brands.{{ $i }}.name' />
            <x-form-error key="model_brands.{{ $i }}.name" />
        </div>
        @endforeach

        <div class="justify-content-between flex items-center gap-5 py-4">
            <button type="submit" class="rounded-md bg-sky-600 px-3 py-3 font-semibold text-gray-200">
                Simpan
            </button>
        </div>
    </section>
</form>
