<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama_ruangan' => 'required',
        'Jenis_ruangan' => 'required',
        // 'Kapasitas_ruangan' => 'required',
        // 'Deskripsi_ruangan' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO ruangans(Nama_ruangan,
        Jenis_ruangan,image) VALUES
        (:Nama_ruangan, :Jenis_ruangan,:image)',
        [
        'Nama_ruangan' => $request->Nama_ruangan,
        'Jenis_ruangan' => $request->Jenis_ruangan,
        // 'Kapasitas_ruangan' => $request->Kapasitas_ruangan,
        // 'Deskripsi_ruangan' => $request->Deskripsi_ruangan,
        'image' => $request->image,
        ]
        );

        
        return redirect()->route('Admin.tambahruangan')->with('success', 'Data ruangan berhasil disimpan');

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

    //  public function insert($id) {
    //     $data = DB::table('ruangans')->where('id',
    //     $id)->first();
    //     return view('Admin.tambahruangan')->with('data', $data);
    //     }
    //     public function update($id, Request $request) {
    //     $request->validate([
    //         'Nama_ruangan' => 'required',
    //         'Jenis_ruangan' => 'required',
    //     ]);
    //     // Me
    // }

    
}
