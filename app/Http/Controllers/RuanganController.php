<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama_ruangan' => 'required',
        'Jenis_ruangan' => 'required',
        'Kapasitas_ruangan' => 'required',
        'Deskripsi_ruangan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO ruangans(Nama_ruangan,
        Jenis_ruangan, Kapasitas_ruangan, Deskripsi_ruangan) VALUES
        (:Nama_ruangan, :Jenis_ruangan, :Kapasitas_ruangan, :Deskripsi_ruangan)',
        [
        'Nama_ruangan' => $request->Nama_ruangan,
        'Jenis_ruangan' => $request->Jenis_ruangan,
        'Kapasitas_ruangan' => $request->Kapasitas_ruangan,
        'Deskripsi_ruangan' => $request->Deskripsi_ruangan,
        ]
        );
                // Menggunakan laravel eloquent
        // Ruangan::create([
        //     'Nama_ruangan' => $request->Nama_ruangan,
        //     'Jenis_ruangan' => $request->Jenis_ruangan,
        // ]);
        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil disimpan');
        }

    public function delete($id){
        Ruangan::where('id_ruangan', $id)->delete();
        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from ruangans');
        return view('Admin.ruangan')
        
        ->with('datas', $datas);
    }
    public function edit($id) {
        $data = DB::table('ruangan')->where('id_ruangan',
        $id)->first();
        return view('ruangan.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
            'Nama_ruangan' => 'required',
            'Jenis_ruangan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        Ruangan::update(
         [
            'Nama_ruangan' => $request->Nama_ruangan,
            'Jenis_ruangan' => $request->Jenis_ruangan,
         ]
        );
         return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil diubah');
     }
}
