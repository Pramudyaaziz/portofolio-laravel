<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
