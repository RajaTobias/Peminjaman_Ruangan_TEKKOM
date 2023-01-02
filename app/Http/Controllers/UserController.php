<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('user.add');
        }
        public function store(Request $request) {
        $request->validate([
        'Nama_lengkap' => 'required',
        'NIM' => 'required',
        'Password' => 'required',
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
        User::create([
            'Nama_lengkap' => $request->Nama_lengkap,
            'NIM' => $request->NIM,
            'Password' => Hash::make($request->Password),
        ]);
        return redirect()->route('user.index')->with('success', 'Data user berhasil disimpan');
        }

    public function delete($id){
        User::where('NIM', $id)->delete();
        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from user');
        return view('user.index')
        
        ->with('datas', $datas);
    }

    public function edit($id) {
        $data = DB::table('user')->where('NIM',
        $id)->first();
        return view('user.edit')->with('data', $data);
        }
        public function update($id, Request $request) {
        $request->validate([
            'Nama_lengkap' => 'required',
            'NIM' => 'required',
            'Password' => 'required',
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        User::update(
         [
            'Nama_lengkap' => $request->Nama_lengkap,
            'NIM' => $request->NIM,
            'Password' => Hash::make($request->Password),
         ]
        );
         return redirect()->route('admin.index')->with('success', 'Data admin berhasil diubah');
     }
}
