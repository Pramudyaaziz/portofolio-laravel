<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    public function index (){
        return view('admin.profile.create');
    }
    public function update(Request $request){
        $request->validate([
            'foto' => 'mimes:png,jpg,gif,jpeg',
            'email' => 'required|email',
        ],[
            'foto.mimes' =>'Masukan foto dengan format JPEG, PNG, JPG, dan GIF',
            'email.required' =>'Email wajib diisi',
            'email.email' =>'Masukan email yang valid',
        ]);

        if($request->hasFile('foto')){
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);

            // metadata::updateOrCreate(['meta_key' => 'foto'], ['meta_value' => $foto_baru]);

             // kalau ada update foto
             $foto_lama = get_meta_value('foto');
             File::delete(public_path('foto') . "/" . $foto_lama);
             metadata::updateOrCreate(['meta_key' => 'foto'], ['meta_value' => $foto_baru]);
        }
        metadata::updateOrCreate(['meta_key' => 'email'], ['meta_value' => $request->email]);
        metadata::updateOrCreate(['meta_key' => 'kota'], ['meta_value' => $request->kota]);
        metadata::updateOrCreate(['meta_key' => 'provinsi'], ['meta_value' => $request->provinsi]);
        metadata::updateOrCreate(['meta_key' => 'nohp'], ['meta_value' => $request->nohp]);
        metadata::updateOrCreate(['meta_key' => 'facebook'], ['meta_value' => $request->facebook]);
        metadata::updateOrCreate(['meta_key' => 'twitter'], ['meta_value' => $request->twitter]);
        metadata::updateOrCreate(['meta_key' => 'linkedin'], ['meta_value' => $request->linkedin]);
        metadata::updateOrCreate(['meta_key' => 'github'], ['meta_value' => $request->github]);
        return redirect()->route('profile.index')->with('success', 'Berhasil update data profile');
    }
}
