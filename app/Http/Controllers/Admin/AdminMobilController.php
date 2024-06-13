<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Mobil;
use App\Models\ModelBrand;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;
use App\Services\AdminMobilService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminMobilCreateRequest;
use Illuminate\Http\Request;

class AdminMobilController extends Controller
{

    private AdminMobilService $adminMobilService;
    public function __construct(AdminMobilService $adminMobilService) {
        $this->adminMobilService = $adminMobilService;
    }
    
    public function index() {
        return view('admin.mobil.index');
    }

    public function create() {
        $brand = Brand::query()->get();
        $model = ModelBrand::query()->get();

        return view('admin.mobil.create', [
            "brands" => $brand,
            "models" => $model,
        ]);
    }

    public function store(AdminMobilCreateRequest $request) {
        $request->validated();

        $this->adminMobilService->Save($request);

        return redirect()->route('mobil');
}

}
