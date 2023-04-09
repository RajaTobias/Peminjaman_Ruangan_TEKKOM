<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserPeminjamanController extends Controller
{
    public function index() {
        
        $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, r.Jenis_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id where user_id = :user_id',['user_id' => auth()->user()->id

        ]);
        return view('User.statuspinjam')
        
        ->with('datas', $datas);
    }

    public function store(Request $request) {
        $request->validate([
        'Nama' => 'required',
        'NIM' => 'required',
        'Keperluan' => 'required',
        // 'Tanggal' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'ruangan_id' => 'required'
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO peminjaman_ruangans(Nama,
        NIM, Keperluan, Jam_mulai, Jam_selesai, user_id, ruangan_id) VALUES
        (:Nama, :NIM, :Keperluan, :Jam_mulai, :Jam_selesai, :user_id, :ruangan_id)',
        [ 
        'Nama' => $request->Nama,
        'NIM' => $request->NIM,
        'Keperluan' => $request->Keperluan,
        // 'Ruangan' => $request->Ruangan,
        // 'Tanggal' => $request->Tanggal,
        'Jam_mulai' => $request->Jam_mulai,
        'Jam_selesai' => $request->Jam_selesai,
        'user_id' => auth()->user()->id,
        'ruangan_id' => $request->ruangan_id
        ]
        );
        return redirect()->route('User.statuspinjam')->with('success', 'Peminjaman Berhasil');
        }

        public function dropdown()
        {
        $datas = DB::select('SELECT id, Nama_ruangan FROM ruangans;');
        return view('User.peminjaman')
        
        ->with('datas', $datas);
        }

}
