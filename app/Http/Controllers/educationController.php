<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class educationController extends Controller
{
    function __construct()
    {
        $this->_tipe ='education';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = riwayat::where('tipe', $this->_tipe)->orderBy('tgl_akhir', 'desc')->get();
        return view('admin.education.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul',$request->judul);
        Session::flash('info1',$request->info1);
        Session::flash('info2',$request->info2);
        Session::flash('info3',$request->info3);
        Session::flash('tgl_mulai',$request->tgl_mulai);
        Session::flash('tgl_akhir',$request->tgl_akhir);
        // Session::flash('isi',$request->isi);
        $request->validate(
            [
            'judul' => 'required',
            'info1' => 'required',
            'tgl_mulai' => 'required',
            // 'isi' => 'required',
            ],[
                'judul.required' => 'judul wajib disi',
                'info1.required' => 'Nama Perusahaan wajib disi',
                'tgl_mulai.required' => 'Tanggal Mulai wajib disi',
            ]
        );

        $data = [
            'judul'=>$request->judul,
            'info1'=>$request->info1,
            'info2'=>$request->info2,
            'info3'=>$request->info3,
            'tipe'=> $this->_tipe,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
            // 'isi'=>$request->isi,
        ];
        riwayat::create($data);

        return redirect()->route('education.index')->with('success','Berhasil menambahkan data education');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = riwayat::where('id',$id)->where('tipe', $this->_tipe)->first();
        return view('admin.education.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'info3' => 'required',
            'tgl_mulai' => 'required',
            ],[
                'judul.required' => 'Perguruan Tinggi wajib disi',
                'info1.required' => 'Fakultas wajib disi',
                'info1.required' => 'Nama Perusahaan wajib disi',
                'tgl_mulai.required' => 'Tanggal Mulai wajib disi',
            ]
        );

        $data = [
            'judul'=>$request->judul,
            'info1'=>$request->info1,
            'info2'=>$request->info2,
            'info3'=>$request->info3,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
            // 'isi'=>$request->isi,
        ];
        riwayat::where('id', $id)->update($data);

        return redirect()->route('education.index')->with('success','Berhasil mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('education.index')->with('success', 'Berhasil Menghapus Data');
    }
}
