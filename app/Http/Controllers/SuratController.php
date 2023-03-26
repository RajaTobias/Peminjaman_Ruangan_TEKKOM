<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index($id){
        $data = DB::table('peminjaman_ruangans')->where('id', $id)->first;
        return view ('User.suratkelas')->with('data',$data);
    }
}
