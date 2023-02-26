<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PeminjamanRuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama' => 'A201',
        'NIM' => 'required',
        'Keperluan' => 'required',
        'Ruangan' => 'required',
        'Tanggal' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        // DB::insert('INSERT INTO ruangans(id_admin,
        // nama_admin, alamat, username, password) VALUES
        // (:id_admin, :nama_admin, :alamat, :username,
        // :password)',
        // [
        // 'id_admin' => $request->id_admin,
        // 'nama_admin' => $request->nama_admin,
        // 'alamat' => $request->alamat,
        // 'username' => $request->username,
        // 'password' => Hash::make($request->password),
        // ]
        // );
        // Menggunakan laravel eloquent
        PeminjamanRuangan::create([
            'Nama' => $request->Nama,
            'NIM' => $request->NIM,
            'Keperluan' => $request->Keperluan,
            'Ruangan' => $request->Ruangan,
            'Tanggal' => $request->Tanggal,
            'Jam_mulai' => $request->Jam_mulai,
            'Jam_selesai' => $request->Jam_selesai,
        ]);
        return redirect()->route('peminjamanruangan.index')->with('success', 'Peminjaman Berhasil');
        }

    public function delete($id){
        PeminjamanRuangan::where('id', $id)->delete();
        return redirect()->route('Admin.pemohon')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from peminjaman_ruangans');
        return view('Admin.pemohon')
        
        ->with('datas', $datas);
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
