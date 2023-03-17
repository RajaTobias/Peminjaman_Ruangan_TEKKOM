<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{

    public function index() {
        $datas = DB::select('selecT Tanggal_pinjam, Waktu_mulai from jadwals');
        return view('Admin.jadwal')
        
        ->with('datas', $datas);

    }

    public function store(Request $request) {
    $request->validate([
    'Tanggal_pinjam' => 'required',
    'Waktu_mulai' => 'required',
    'Waktu_selesai' => 'required',
    'id_ruangan' => 'required',
    ]);
    
    DB::insert('INSERT INTO jadwals(Tanggal_pinjam,
    Waktu_mulai, Waktu_selesai, id_ruangan) VALUES
    (:Tanggal_pinjam, :Waktu_mulai, :Waktu_selesai, :id_ruangan)',
    [
    'Tanggal_pinjam' => $request->Tanggal_pinjam,
    'Waktu_mulai' => $request->Waktu_mulai,
    'Waktu_selesai' => $request->Waktu_selesai,
    'id_ruangan' => $request->id_ruangan,
    ]
    );
    return redirect()->route('Admin.jadwal')->with('success', 'Data jadwal berhasil disimpan');
    }

    public function dropdown()
        {
        $datas = DB::select('SELECT id, Nama_ruangan FROM ruangans;');
        return view('Admin.editjadwal')
        
        ->with('datas', $datas);
        }
//     public function delete($id){
//         Ruangan::where('id_jadwal', $id)->delete();
//         return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil dihapus');
//     }


    // public function edit($id) {
    //     $data = DB::table('jadwal')->where('id_jadwal',
    //     $id)->first();
    //     return view('jadwal.edit')->with('data', $data);
    //     }
    //     public function update($id, Request $request) {
    //     $request->validate([
    //     'Tanggal_pinjam' => 'required',
    //     'Waktu_mulai' => 'required',
    //     'Waktu_selesai' => 'required',
    //     'id_ruangan' => 'required',
    //     ]);
    //     // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
    //     Jadwal::update(
    //      [
    //         'Tanggal_pinjam' => $request->Tanggal_pinjam,
    //         'Waktu_mulai' => $request->Waktu_mulai,
    //         'Waktu_selesai' => $request->Waktu_selesai,
    //         'id_ruangan' => $request->id_ruangan,
    //      ]
    //     );
    //      return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil diubah');
    //  }
}
