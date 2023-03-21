<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PeminjamanRuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama' => 'required',
        'NIM' => 'required',
        'Keperluan' => 'required',
        'Tanggal' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'ruangan_id' => 'required'
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO peminjaman_ruangans(Nama,
        NIM, Keperluan, Ruangan, Tanggal, Jam_mulai, Jam_selesai, user_id, ruangan_id) VALUES
        (:Nama, :NIM, :Keperluan, :Ruangan,
        :Tanggal, :Jam_mulai, :Jam_selesai, :user_id, :ruangan_id)',
        [ 
        'Nama' => $request->Nama,
        'NIM' => $request->NIM,
        'Keperluan' => $request->Keperluan,
        'Ruangan' => $request->Ruangan,
        'Tanggal' => $request->Tanggal,
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

    public function delete($id){
        PeminjamanRuangan::where('id', $id)->delete();
        return redirect()->route('Admin.pemohon')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        if (auth()->user()->is_TU == 1){
        $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id where r.Jenis_ruangan = "Ruang Kelas"');
        return view('Admin.pemohon')
        
        ->with('datas', $datas);
        }else{
            $datas = DB::select('select p.id, p.Nama, p.NIM, p.Keperluan, r.Nama_ruangan, p.Tanggal, p.Jam_mulai, p.Jam_selesai, p.is_accept, p.is_decline
        FROM peminjaman_ruangans p INNER JOIN ruangans r
        ON p.ruangan_id = r.id where r.Jenis_ruangan = "Ruang Laboratorium"');
        return view('Admin.pemohon')
        
        ->with('datas', $datas);
        }
    }


    public function edit($id) {
        $data = DB::table('peminjaman_ruangans')->where('id',
        $id)->first();
        return view('peminjamanruangan.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
        'Nama' => 'required',
        'NIM' => 'required',
        'Keperluan' => 'required',
        'Ruangan' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'Tanggal' => 'required',
        'Kegiatan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        PeminjamanRuangan::update(
         [
            'Nama' => $request->Nama,
            'NIM' => $request->iNId_user,
            'Keperluan' => $request->Keperluan,
            'Ruangan' => $request->Ruangan,
            'Jam_mulai' => $request->Jam_mulai,
            'Jam_selesai' => $request->Jam_selesai,
            'Tanggal' => $request->Tanggal,
            'Kegiatan' => $request->Kegiatan,
         ]
        );
         return redirect()->route('peminjamanruangan.index')->with('success', 'Data ruangan berhasil diubah');
     }
}
