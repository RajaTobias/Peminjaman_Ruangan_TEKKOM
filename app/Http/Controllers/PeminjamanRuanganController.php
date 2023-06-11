<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class PeminjamanRuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama' => 'required',
        'NIM' => 'required',
        'Keperluan' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'ruangan_id' => 'required'
        ]);
        
        DB::insert('INSERT INTO peminjaman_ruangans(Nama,
        NIM, Keperluan, Jam_mulai, Jam_selesai, user_id, ruangan_id) VALUES
        (:Nama, :NIM, :Keperluan, :Jam_mulai, :Jam_selesai, :user_id, :ruangan_id)',
        [ 
        'Nama' => $request->Nama,
        'NIM' => $request->NIM,
        'Keperluan' => $request->Keperluan,
        'Jam_mulai' => $request->Jam_mulai,
        'Jam_selesai' => $request->Jam_selesai,
        'user_id' => auth()->user()->id,
        'ruangan_id' => $request->ruangan_id
        ]
        );
        return redirect()->route('Admin.pemohon')->with('success', 'Peminjaman Berhasil');
        }

        public function dropdown()
        {
        $datas = DB::select('SELECT id, Nama_ruangan FROM ruangans;');
        return view('Admin.peminjaman')
        
        ->with('datas', $datas);
        }

    // public function delete($id){
    //     PeminjamanRuangan::where('id', $id)->delete();
    //     return redirect()->route('Admin.pemohon')->with('success', 'Data ruangan berhasil dihapus');
    // }

    public function index() {
        if (auth()->user()->is_TU == 1){
            $datas = DB::table('peminjaman_ruangans')
            ->select('peminjaman_ruangans.id','peminjaman_ruangans.Nama','peminjaman_ruangans.NIM', 'peminjaman_ruangans.Keperluan','peminjaman_ruangans.Jam_mulai',
            'peminjaman_ruangans.Jam_selesai','peminjaman_ruangans.is_accept','peminjaman_ruangans.is_decline', 'ruangans.Nama_ruangan')
            ->join('ruangans','ruangans.id','=','peminjaman_ruangans.ruangan_id')
            ->where('ruangans.Jenis_ruangan', '=', "Ruang Kelas")
            ->where('peminjaman_ruangans.Nama', '!=', NULL)
            ->paginate(3);
        return view('Admin.pemohon')
        
        ->with('datas', $datas);
        }
        else{
            $datas = DB::table('peminjaman_ruangans')
            ->select('peminjaman_ruangans.id','peminjaman_ruangans.Nama','peminjaman_ruangans.NIM', 'peminjaman_ruangans.Keperluan','peminjaman_ruangans.Jam_mulai',
            'peminjaman_ruangans.Jam_selesai','peminjaman_ruangans.is_accept','peminjaman_ruangans.is_decline', 'ruangans.Nama_ruangan')
            ->join('ruangans','ruangans.id','=','peminjaman_ruangans.ruangan_id')
            ->where('ruangans.Jenis_ruangan', '=', "Ruang Laboratorium")
            ->where('peminjaman_ruangans.Nama', '!=', NULL)
            ->paginate(3);
        return view('Admin.pemohon')
        
        ->with('datas', $datas);
        }
    }

    public function indexsurat() {
        $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id  where p.id = p.id');
        return view('User.suratkelas')
        
        ->with('datas', $datas);
        
    }

    // public function acc_index() {
    //     if (auth()->user()->is_TU == 1){
    //     $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
    //     FROM peminjaman_ruangans p INNER JOIN ruangans r
    //     ON p.ruangan_id = r.id where r.Jenis_ruangan = "Ruang Kelas" where = p.is_accept == 1');
    //     return view('Admin.pemohon')
        
    //     ->with('datas', $datas);
    //     }else{
    //         $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
    //     FROM peminjaman_ruangans p INNER JOIN ruangans r
    //     ON p.ruangan_id = r.id where r.Jenis_ruangan = "Ruang Laboratorium" where = p.is_accept == 1');
    //     return view('Admin.pemohon')
        
    //     ->with('datas', $datas);
    //     }
    // }

}
