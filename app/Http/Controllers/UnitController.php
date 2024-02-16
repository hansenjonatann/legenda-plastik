<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('units.index', compact('units'));
    }

    public function create()
    {
       return view('units.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'kode_unit' => 'required'
        ]);

        if($validator)
        {
            $unit = new Unit();
            $unit->kode_unit = $request->kode_unit;

            $unit->save();

            return redirect()->to('/units');
        }

        


    }
}
