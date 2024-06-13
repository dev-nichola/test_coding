<?php

namespace App\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toast;
use Masmerise\Toaster\Toaster;
use Illuminate\Database\Eloquent\Collection;

class BrandEditForm extends Component
{
    public $brands;

    public function mount(Collection $brands)
    {
        $this->brands = [];

        foreach ($brands as $brand) {
            $this->brands[] = [
                'id' => $brand->id,
                'name' => $brand->name,
            ];
        }
    }

    public function removeBrandInput($index)
    {
        unset($this->brands[$index]);
        $this->brands = array_values($this->brands); // Reindex array
    }

    public function save()
    {
        $this->validate([
            'brands.*.name' => 'required|string|max:255',
        ]);

        foreach ($this->brands as $brand) {
            if (isset($brand['id'])) {
                $existingBrand = Brand::find($brand['id']);
                if ($existingBrand) {
                    $existingBrand->update([
                        'name' => $brand['name'],
                        'slug' => Str::slug($brand['name'])
                    ]);
                }
            } else {
                Brand::create(['name' => $brand['name']]);
            }
        }

        Toaster::success('Successfully updated a brand');
        return redirect()->route('brand');
    }

    public function render()
    {
        return view('livewire.brand.brand-edit-form');
    }
}
