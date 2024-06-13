<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Rental;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class RentController extends Controller
{
    public function rent() {
        return view('pages.rent');
    }
    
    public function saveCustomer(Request $request) {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'license' => 'required|string|max:20',
            'dateFrom' => 'required|date',
            'dateUntil' => 'required|date|after_or_equal:dateFrom',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postCode' => 'required|numeric',
        ]);

        Rental::create($data);

        Toaster::success('Sukses Merental');

        return redirect()->action([PagesController::class, 'index']);
    }
}
