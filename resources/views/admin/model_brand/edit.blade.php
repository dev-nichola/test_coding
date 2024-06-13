<x-app-layout>
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-[30px] font-semibold leading-[45px] text-gray-800"># Ubah    Data</h1>
        </div>
    </div>  
    <div>
        <livewire:model-brand.model-brand-edit-form :model_brands="$model_brands"/>
    </div>
</x-app-layout>