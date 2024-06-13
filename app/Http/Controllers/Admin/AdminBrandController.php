<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function index() {
        return view('admin.brand.index');
    }


    public function create() {
        return view('admin.brand.create');
    }

    public function edit(Request $request)
    {
        $ids = $request->query('ids');
    
        if (!$ids) {
            return redirect()->back();
        }
    
        $idsArray = explode('-', $ids);
        $brands = Brand::whereIn('id', $idsArray)->get();
    
        return view('admin.brand.edit', [
            'brands' => $brands,
        ]);
    }
    
}
