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
        DB::update('UPDATE users SET is_admin = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', '{{ Auth::user()->name }} sekarang admin');
    }

    public function index()
    {
        $datas = DB::select('SELECT id, name, is_admin FROM users;');
        return view('Admin.ubahuser')
        
        ->with('datas', $datas);
    }
}