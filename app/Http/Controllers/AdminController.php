<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function role_user($id)
    {
        DB::update('UPDATE users SET is_admin = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', 'Role berhasil diganti');
    }

    public function role_admin_lab($id)
    {
        DB::update('UPDATE users SET is_admin = 1 , is_TU = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', 'Role berhasil diganti');
    }

    public function role_admin_TU($id)
    {
        DB::update('UPDATE users SET is_admin = 1 , is_TU = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', 'Role berhasil diganti');
    }

    public function accept($id)
    {
        DB::update('UPDATE peminjaman_ruangans SET is_accept = 1, is_decline = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.pemohon')->with('success', 'Peminjaman diterima');
    }

    public function decline($id)
    {
        DB::update('UPDATE peminjaman_ruangans SET is_decline = 1, is_accept = 0  WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.pemohon')->with('success', 'Peminjaman ditolak');
    }

    public function index()
    {
        $datas = DB::select('SELECT id, name, is_admin, is_TU FROM users;');
        return view('Admin.ubahuser')
        
        ->with('datas', $datas);
    }

}