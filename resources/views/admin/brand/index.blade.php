    <x-app-layout>
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-[30px] font-semibold leading-[45px] text-gray-800"># Brand</h1>
            </div>
            <x-button to="{{ route('brand.create') }}" color="bg-gray-800">Tambah Data</x-button>
        </div>  
        <div>
            <livewire:brand.brand-table/>
        </div>
        
        
    </x-app-layout>