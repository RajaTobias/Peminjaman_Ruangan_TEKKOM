<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{

    public function index() {
        $datas = DB::select('select Keperluan, Waktu_mulai, Waktu_selesai, id_ruangan from jadwals');
        return view('Admin.jadwal')
        
        ->with('datas', $datas);

    }

    public function userindex() {
        $datas = DB::select('select Keperluan, Waktu_mulai, Waktu_selesai, id_ruangan from jadwals');
        return view('User.jadwal')
        
        ->with('datas', $datas);

    }

    public function store(Request $request) {
    $request->validate([
    'Keperluan' => 'required',
    'Waktu_mulai' => 'required',
    'Waktu_selesai' => 'required',
    'id_ruangan' => 'required',
    ]);
    
    DB::insert('INSERT INTO jadwals(
    Keperluan, Waktu_mulai, Waktu_selesai, id_ruangan) VALUES
    (:Keperluan, :Waktu_mulai, :Waktu_selesai, :id_ruangan)',
    [
    'Keperluan' => $request->Keperluan,
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
}
