<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index($id){
        $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id WHERE p.id = :id', ['id' => $id]);
        return view('User.suratkelas')->with('datas',$datas);
    }

    public function indexlab($id){
        $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id WHERE p.id = :id', ['id' => $id]);
        return view('User.suratlab')->with('datas',$datas);
    }
}
