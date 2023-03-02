<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserPeminjamanController extends Controller
{
    public function index() {
        $datas = DB::select('select * from peminjaman_ruangans');
        return view('User.statuspinjam')
        
        ->with('datas', $datas);
    }

    public function store(Request $request) {
        $request->validate([
        'Nama' => 'required',
        'NIM' => 'required',
        'Keperluan' => 'required',
        'Ruangan' => 'required',
        'Tanggal' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO peminjaman_ruangans(Nama,
        NIM, Keperluan, Ruangan, Tanggal, Jam_mulai, Jam_selesai) VALUES
        (:Nama, :NIM, :Keperluan, :Ruangan,
        :Tanggal, :Jam_mulai, :Jam_selesai)',
        [
        'Nama' => $request->Nama,
        'NIM' => $request->NIM,
        'Keperluan' => $request->Keperluan,
        'Ruangan' => $request->Ruangan,
        'Tanggal' => $request->Tanggal,
        'Jam_mulai' => $request->Jam_mulai,
        'Jam_selesai' => $request->Jam_selesai
        ]
        );
        return redirect()->route('User.statuspinjam')->with('success', 'Peminjaman Berhasil');
        }

}
