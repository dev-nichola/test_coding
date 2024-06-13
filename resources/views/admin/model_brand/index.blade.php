<x-app-layout>
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-[30px] font-semibold leading-[45px] text-gray-800"># Model  </h1>
        </div>
        <x-button to="{{ route('model.create') }}" color="bg-gray-800">Tambah Data</x-button>
    </div>  
    <div>
        <livewire:modelbrand.model-brand-table/>
    </div>
    
    
</x-app-layout>