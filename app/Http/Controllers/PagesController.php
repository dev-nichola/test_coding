<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {   

        $fetch = Mobil::query()->get();

        return view('pages.index', [
            'fetchings' => $fetch,
        ]);
    }

    public function show(string $slug) {
      $mobil = Mobil::query()->where('slug', $slug)->first();

      return view('pages.detail', [
        "item" => $mobil
      ]);  
    }
}
