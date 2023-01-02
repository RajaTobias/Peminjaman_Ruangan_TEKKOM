<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanRuangan extends Controller
{
    public function create() {
        return view('ruangan.add');
        }
        public function store(Request $request) {
        $request->validate([
        'Status' => 'required',
        'id_user' => 'required',
        'id_ruangan' => 'required',
        'Keterangan' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'Tanggal' => 'required',
        'Kegiatan' => 'required',
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
            'Status' => $request->Status,
            'id_user' => $request->id_user,
            'id_ruangan' => $request->id_ruangan,
            'Keterangan' => $request->Keterangan,
            'Jam_mulai' => $request->Jam_mulai,
            'Jam_selesai' => $request->Jam_selesai,
            'Tanggal' => $request->Tanggal,
            'Kegiatan' => $request->Kegiatan,
        ]);
        return redirect()->route('peminjamanruangan.index')->with('success', 'Data ruangan berhasil disimpan');
        }

    public function delete($id){
        PeminjamanRuangan::where('id_peminjaman', $id)->delete();
        return redirect()->route('peminjamanruangan.index')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from peminjamanruangan');
        return view('peminjamanruangan.index')
        
        ->with('datas', $datas);
    }
    public function edit($id) {
        $data = DB::table('peminjamanruangan')->where('id_peminjaman',
        $id)->first();
        return view('peminjamanruangan.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
        'Status' => 'required',
        'id_user' => 'required',
        'id_ruangan' => 'required',
        'Keterangan' => 'required',
        'Jam_mulai' => 'required',
        'Jam_selesai' => 'required',
        'Tanggal' => 'required',
        'Kegiatan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        PeminjamanRuangan::update(
         [
            'Status' => $request->Status,
            'id_user' => $request->id_user,
            'id_ruangan' => $request->id_ruangan,
            'Keterangan' => $request->Keterangan,
            'Jam_mulai' => $request->Jam_mulai,
            'Jam_selesai' => $request->Jam_selesai,
            'Tanggal' => $request->Tanggal,
            'Kegiatan' => $request->Kegiatan,
         ]
        );
         return redirect()->route('peminjamanruangan.index')->with('success', 'Data ruangan berhasil diubah');
     }
}
