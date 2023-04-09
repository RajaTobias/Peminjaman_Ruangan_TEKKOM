<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{

    public function index() {
        $datas = DB::select('select * from peminjaman_ruangans INNER JOIN ruangans ON peminjaman_ruangans.ruangan_id = ruangans.id where is_accept = 1');
        return view('Admin.jadwal')
        
        ->with('datas', $datas);

    }

    public function indexuser() {
        $datas = DB::select('select j.id, j.Keperluan, j.Waktu_mulai, j.Waktu_selesai, r.Nama_ruangan FROM jadwals j INNER JOIN ruangans r
        ON j.id_ruangan = r.id');
        return view('User.jadwal')
        
        ->with('datas', $datas);

    }

    public function userindex() {
        $datas = DB::select('select Keperluan, Waktu_mulai, Waktu_selesai, id_ruangan from jadwals');
        return view('User.jadwal')
        
        ->with('datas', $datas);

    }

    // public function store(Request $request) {
    // $request->validate([
    // 'Keperluan' => 'required',
    // 'Waktu_mulai' => 'required',
    // 'Waktu_selesai' => 'required',
    // 'id_ruangan' => 'required',
    // ]);
    
    // DB::insert('INSERT INTO jadwals(
    // Keperluan, Waktu_mulai, Waktu_selesai, id_ruangan) VALUES
    // (:Keperluan, :Waktu_mulai, :Waktu_selesai, :id_ruangan)',
    // [
    // 'Keperluan' => $request->Keperluan,
    // 'Waktu_mulai' => $request->Waktu_mulai,
    // 'Waktu_selesai' => $request->Waktu_selesai,
    // 'id_ruangan' => $request->id_ruangan,
    // ]
    // );
    // return redirect()->route('Admin.jadwal')->with('success', 'Data jadwal berhasil disimpan');
    // }

    public function store(Request $request) {
        $request->validate([
        'Keperluan' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'ruangan_id' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO peminjaman_ruangans(Keperluan, Jam_mulai, Jam_selesai, ruangan_id, is_accept) VALUES
        (:Keperluan,
        :Jam_mulai, :Jam_selesai, :ruangan_id, :is_accept)',
        [ 
        'Keperluan' => $request->Keperluan,
        // 'Ruangan' => $request->Ruangan,
        'Jam_mulai' => $request->Jam_mulai,
        'Jam_selesai' => $request->Jam_selesai,
        'ruangan_id' => $request->ruangan_id,
        'is_accept' => "1"
        ]
        );
        return redirect()->route('Admin.jadwal')->with('success', 'Peminjaman Berhasil');
        }

    public function dropdown()
        {
        $datas = DB::select('SELECT id, Nama_ruangan FROM ruangans;');
        return view('Admin.editjadwal')
        
        ->with('datas', $datas);
        }
}
