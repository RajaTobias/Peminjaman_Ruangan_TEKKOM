<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function role($id)
    {
        DB::update('UPDATE users 
        SET is_admin = CASE
        WHEN is_admin = 1 THEN 0
        ELSE 1
        END
        WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', 'Role berhasil diganti');
    }

    public function accept()
    {
        DB::update('UPDATE peminjaman_ruangans SET is_accept = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.pemohon')->with('success', 'Peminjaman diterima');
    }

    public function decline()
    {
        DB::update('UPDATE peminjaman_ruangans SET is_decline = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.pemohon')->with('success', 'Peminjaman ditolak');
    }

    public function index()
    {
        $datas = DB::select('SELECT id, name, is_admin FROM users;');
        return view('Admin.ubahuser')
        
        ->with('datas', $datas);
    }
}