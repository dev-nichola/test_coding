<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;

class BrandCreateForm extends Component
{
    public array $brands;
    private $intialValue = [
        "name" => ''
    ];

    public function mount()
    {
        $this->brands[] = [$this->intialValue]; 
    }

    public function addBrandInput() : void
    {
        $this->brands[] = $this->intialValue;
    }

    public function removeBrandInput(int $index) : void
    {
        unset($this->brands[$index]);
        $this->brands = array_values($this->brands);
    }

    public function rules() {
        return [
            'brands.*.name' => "required|min:4|unique:brands|distinct"
        ];
    }

    public function messages() {
        return [
            'brands.*.name.required' => 'Nama brand harus diisi',
            'brands.*.name.min' => 'Nama brand minimal 4 karakter',
            'brands.*.name.unique' => 'Nama brand sudah terdaftar',
            'brands.*.name.distinct' => 'Nama brand tidak boleh sama'
        ];
    }

    public function save()
    {
       $this->validate();

        foreach ($this->brands as $brandInput) {
            $brand = new Brand();

            $brand->name = $brandInput['name'];
            $brand->slug = Str::slug($brandInput['name']);

            $brand->save();
        }
    
        Toaster::success('Successfully created a brand');
        redirect()->route('brand');

    }

    public function render()
    {
        return view('livewire.brand.brand-create-form');
    }
}
