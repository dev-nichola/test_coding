<?php 

namespace App\Services\Impl;

use App\Models\Mobil;
use Illuminate\Support\Str;
use App\Services\AdminMobilService;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class AdminMobilServiceImpl implements AdminMobilService {
    
    public function FindById() {

    }
    public function Save(Request $request) 
    {            
        $image = $request->file('image');
        
        $image = $image->storeAs('/public/mobil', $image->getClientOriginalName());

        $slug = Str::slug($request->name, "-");

        Mobil::query()->create([
            'image' => $image,
            'name' => $request->name,
           'slug' => $slug,
            'license_plate' => $request->license_plate,
           'rental_rate' => $request->rental_rate,
            'is_available' => $request->is_available,
            'brand_id' => $request->brand_id,
           'model_brand_id' => $request->model_brand_id,
           'description' => $request->description
        ]);

        Toaster::success("successfully created mobil");
    }

    public function Update() {

    }

    public function Delete() {

    }
}
