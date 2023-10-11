<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index(){
        $datahalaman = halaman::orderBy('judul', 'ASC')->get();
        return view('admin.pengaturan_halaman.index')->with('datahalaman', $datahalaman);
    }
    function update(Request $request){
        metadata::updateOrCreate(['meta_key' => 'halaman_about'], ['meta_value' => $request->halaman_about]);
        metadata::updateOrCreate(['meta_key' => 'halaman_interest'], ['meta_value' => $request->halaman_interest]);
        metadata::updateOrCreate(['meta_key' => 'halaman_award'], ['meta_value' => $request->halaman_award]);
        return redirect()->route('pengaturanhalaman.index')->with('success', 'Berhasil update pengaturan halaman');
    }
}
