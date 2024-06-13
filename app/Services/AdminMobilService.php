<?php 

namespace App\Services;

use Illuminate\Http\Request;

interface AdminMobilService {
    public function FindById();
    public function Save(Request $request);
    public function Update();
    public function Delete();
}
