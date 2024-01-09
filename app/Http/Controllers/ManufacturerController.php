<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index(){
        $manufacturers = Manufacturer::orderBy('name')->get();
        return view('manufacturers.index', compact('manufacturers'));
    }
}
