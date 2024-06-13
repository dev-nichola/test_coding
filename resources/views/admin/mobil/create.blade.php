<x-app-layout>
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-[30px] font-semibold leading-[45px] text-gray-800"># Mobil</h1>
        </div>
    </div>  

    <form method="POST" action="{{ route('mobil.store') }}" class="px-8 py-8 shadow-xl" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div>
            <h1 class="text-xl font-semibold"># Form Tambah Data Mobil</h1>
        </div>

        <div class="grid grid-cols-2 gap-8">
            <div>
                <x-form-label name="image" label="Gambar Mobil" />
                <x-form-input type="file" id="image" name="image" value="{{ old('image') }}"/>  
                <x-form-error key="image" />
            </div>
    
            <div>
                <x-form-label name="name" label="Nama Mobil" />
                <x-form-input type="text" id="name" name="name" value="{{ old('name') }}"/>
                <x-form-error key="name" />
            </div>
    
            <div>
                <x-form-label name="license_plate" label="Plat Nomor" />
                <x-form-input type="text" id="license_plate" name="license_plate" value="{{ old('license_plate') }}"/>
                <x-form-error key="license_plate" />
            </div>
    
            <div>
                <x-form-label name="rental_rate" label="Rental Rate / Hari" />
                <x-form-input type="number" id="rental_rate" name="rental_rate" value="{{ old('rental_rate') }}"/>
                <x-form-error key="rental_rate" />
            </div>
    
            <div>
                <x-form-label name="brand_id" label="Brand" />
                <select name="brand_id" class="w-full rounded-lg border-2 border-blue-400 bg-gray-50 px-2 py-2 text-sm text-gray-800">
                    <option value="">-- Pilih Brand --</option>
                    @foreach ($brands as $item)
                        <option value="{{ $item->id }}" {{ old('brand_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
               </select>
                <x-form-error key="brand_id" />
            </div>
            
            <div>
                <x-form-label name="model_brand_id" label="Model Mobil" />
                <select name="model_brand_id" class="w-full rounded-lg border-2 border-blue-400 bg-gray-50 px-2 py-2 text-sm text-gray-800">
                    <option value="">-- Pilih Model Mobil --</option>
                    @foreach ($models as $item)
                        <option value="{{ $item->id }}" {{ old('model_brand_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
               </select>
                <x-form-error key="model_brand_id" />
            </div>
        </div>

        <div>
            <x-form-label name="is_available" label="Status Mobil" />
            <select name="is_available" class="w-full rounded-lg border-2 border-blue-400 bg-gray-50 px-2 py-2 text-sm text-gray-800">
                <option value="">-- Pilih Status --</option>
                <option value="1" {{ old('is_available') == "1" ? 'selected' : '' }}>Tersedia</option>
                <option value="0" {{ old('is_available') == "0" ? 'selected' : '' }}>Tidak Tersedia</option>
           </select>
           <x-form-error key="is_available" />
        </div>
        
        <div>
            <x-form-label name="description" label="Deskripsi" />
            <textarea name="description" id="description" cols="30" rows="10" class="w-full rounded-lg border-2 border-blue-400 bg-gray-50 px-2 py-2 text-sm text-gray-800">{{ old('description') }}</textarea>
            <x-form-error key="description" />
        </div>
        
        <div class="py-4">
            <button type="submit" class="w-full rounded-lg bg-blue-500 px-4 py-4 font-semibold leading-4 text-white">Simpan</button>
        </div>
    </form>
</x-app-layout>
