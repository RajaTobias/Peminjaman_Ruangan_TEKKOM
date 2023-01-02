<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function create() {
        return view('jadwal.add');
        }
        public function store(Request $request) {
        $request->validate([
        'Tanggal_pinjam' => 'required',
        'Waktu_mulai' => 'required',
        'Waktu_selesai' => 'required',
        'id_ruangan' => 'required',
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
        Jadwal::create([
            'Tanggal_pinjam' => $request->Tanggal_pinjam,
            'Waktu_mulai' => $request->Waktu_mulai,
            'Waktu_selesai' => $request->Waktu_selesai,
            'id_ruangan' => $request->id_ruangan,
        ]);
        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil disimpan');
        }

    public function delete($id){
        Ruangan::where('id_jadwal', $id)->delete();
        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from jadwal');
        return view('jadwal.index')
        
        ->with('datas', $datas);
    }

    public function edit($id) {
        $data = DB::table('jadwal')->where('id_jadwal',
        $id)->first();
        return view('jadwal.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
        'Tanggal_pinjam' => 'required',
        'Waktu_mulai' => 'required',
        'Waktu_selesai' => 'required',
        'id_ruangan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        Jadwal::update(
         [
            'Tanggal_pinjam' => $request->Tanggal_pinjam,
            'Waktu_mulai' => $request->Waktu_mulai,
            'Waktu_selesai' => $request->Waktu_selesai,
            'id_ruangan' => $request->id_ruangan,
         ]
        );
         return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil diubah');
     }
}
