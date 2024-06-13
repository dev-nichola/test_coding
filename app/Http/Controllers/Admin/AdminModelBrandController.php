<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelBrand;
use Illuminate\Http\Request;

class AdminModelBrandController extends Controller
{
    public function index() {
        return view('admin.model_brand.index');
    }

    public function create() {
        return view('admin.model_brand.create');
    }

    public function edit() {
        $ids = request('ids');
    
        if (!$ids) {
            return redirect()->back();
        }
    
        $idsArray = explode('-', $ids);
        $model_brands = ModelBrand::whereIn('id', $idsArray)->get();
    
        return view('admin.model_brand.edit', [
            'model_brands' => $model_brands,
        ]);
    }
}
