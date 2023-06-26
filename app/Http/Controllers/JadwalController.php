<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\JadwalImport;
use App\Exports\PegawaiExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{

    public function index() {
        $datas = DB::select('select * from peminjaman_ruangans INNER JOIN ruangans ON peminjaman_ruangans.ruangan_id = ruangans.id where is_accept = 1');
        return view('Admin.jadwal')
        
        ->with('datas', $datas);

    }

    public function indexuser() {
        $datas = DB::select('select * from peminjaman_ruangans INNER JOIN ruangans ON peminjaman_ruangans.ruangan_id = ruangans.id where is_accept = 1');
        return view('User.jadwal')
        
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
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'ruangan_id' => 'required',
        ]);
      
        DB::insert('INSERT INTO peminjaman_ruangans(Keperluan, Jam_mulai, Jam_selesai, ruangan_id, is_accept, user_id) VALUES
        (:Keperluan,
        :Jam_mulai, :Jam_selesai, :ruangan_id, :is_accept, :user_id)',
        [ 
        'Keperluan' => $request->Keperluan,
        'Jam_mulai' => $request->Jam_mulai,
        'Jam_selesai' => $request->Jam_selesai,
        'ruangan_id' => $request->ruangan_id,
        'user_id' => auth()->user()->id,
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

        public function import(Request $request)
        {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file -> move ('DataJadwal', $namaFile);

        Excel::import(new JadwalImport, public_path('/DataJadwal/'.$namaFile));
        return redirect()->route('Admin.jadwal');
        }

        public function export(){
            return Excel::download(new PegawaiExport, 'jadwal.xlsx');
        }

        public function download(){
            try{
                Storage::disk('local')->download('public/downloads/Jadwal.xlsx');
            }catch(\Exception $e){
                abort(404);
            }
        }

        public function cetakPDF(){
        $datas = DB::select('select * from peminjaman_ruangans INNER JOIN ruangans ON peminjaman_ruangans.ruangan_id = ruangans.id where is_accept = 1');
        return view('Admin.cetakpdf')
        
        ->with('datas', $datas);
        }
}
