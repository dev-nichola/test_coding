<?php

namespace App\Livewire\ModelBrand;

use Livewire\Component;
use App\Models\ModelBrand;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;
use Illuminate\Database\Eloquent\Collection;

class ModelBrandEditForm extends Component
{   
    public $model_brands;
    public function mount(Collection $model_brands)
    {
        $this->model_brands = [];

        foreach ($model_brands as $model) {
            $this->model_brands[] = [
                'id' => $model->id,
                'name' => $model->name,
            ];
        }
    }

    public function rules()
    {
        return [
            'model_brands.*.name' => 'required|min:4|distinct'
        ];
    }

    public function messages()
    {
        return [
            'model_brands.*.name.required' => 'Nama Model harus diisi',
            'model_brands.*.name.min' => 'Nama Model minimal 4 karakter',
            'model_brands.*.name.distinct' => 'Nama Model tidak boleh sama'
        ];
    }

    public function save()
    {
        $this->validate();

        foreach ($this->model_brands as $modelInput) {
            $model = ModelBrand::find($modelInput['id']);
            $model->name = $modelInput['name'];
            $model->slug = Str::slug($modelInput['name']);
            $model->save();
        }

        Toaster::success('Successfully updated the model');
        return redirect()->route('model');
    }


    
    public function render()
    {
        return view('livewire.model-brand.model-brand-edit-form');
    }
}
