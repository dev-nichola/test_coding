<?php

namespace App\Livewire\ModelBrand;

use App\Models\Brand;
use App\Models\ModelBrand;
use Livewire\Component;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;

class ModelBrandCreateFrom extends Component
{
    public $model_brands = [];
    public $brands = [];
    public $selectedBrand;

    private $initialValue = [
        "name" => ''
    ];

    public function mount() {
        $this->brands = Brand::all();
        $this->model_brands[] = $this->initialValue;
    }

    public function addBrandInput(): void
    {
        $this->model_brands[] = $this->initialValue;
    }

    public function removeBrandInput(int $index): void
    {
        unset($this->model_brands[$index]);
        $this->model_brands = array_values($this->model_brands);
    }

    public function rules() {
        return [
            'selectedBrand' => 'required|exists:brands,id',
            'model_brands.*.name' => 'required|min:4|unique:model_brands,name|distinct'
        ];
    }

    public function messages() {
        return [
            'selectedBrand.required' => 'Brand harus dipilih',
            'selectedBrand.exists' => 'Brand yang dipilih tidak valid',
            'model_brands.*.name.required' => 'Nama Model harus diisi',
            'model_brands.*.name.min' => 'Nama Model minimal 4 karakter',
            'model_brands.*.name.unique' => 'Nama Model sudah terdaftar',
            'model_brands.*.name.distinct' => 'Nama Model tidak boleh sama'
        ];
    }

    public function save()
    {
        $this->validate();

        foreach ($this->model_brands as $modelInput) {
            $modelBrand = new ModelBrand();
            $modelBrand->name = $modelInput['name'];
            $modelBrand->slug = Str::slug($modelInput['name']);
            $modelBrand->brand_id = $this->selectedBrand;
            $modelBrand->save();
        }

        Toaster::success('Successfully created a model of brand');
        return redirect()->route('model'); // Ensure this route exists
    }

    public function render()
    {
        return view('livewire.model-brand.model-brand-create-from');
    }
}
