<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function create() {
        return view('ruangan.add');
        }
        public function store(Request $request) {
        $request->validate([
        
        'Nama_ruangan' => 'required',
        'Jenis_ruangan' => 'required',
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
        Ruangan::create([
            'Nama_ruangan' => $request->Nama_ruangan,
            'Jenis_ruangan' => $request->Jenis_ruangan,
        ]);
        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil disimpan');
        }

    public function delete($id){
        Ruangan::where('id_ruangan', $id)->delete();
        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from ruangan');
        return view('ruangan.index')
        
        ->with('datas', $datas);
    }
    public function edit($id) {
        $data = DB::table('ruangan')->where('id_ruangan',
        $id)->first();
        return view('ruangan.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
            'Nama_ruangan' => 'required',
            'Jenis_ruangan' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        Ruangan::update(
         [
            'Nama_ruangan' => $request->Nama_ruangan,
            'Jenis_ruangan' => $request->Jenis_ruangan,
         ]
        );
         return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil diubah');
     }
}
