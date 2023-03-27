<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function indexuser() {
        $datas = DB::select('select * from users');
        return view('User.profile')
        
        ->with('datas', $datas);
    }

    public function edituser() {
        $data = DB::table('users');
        return view('User.editprofile')->with('data', $data);
        }
        public function updateuser(Request $request) {
        $request->validate([
            'name' => 'required',
            'Nomor_ID' => 'nullable',
            'Nomor_HP' => 'nullable',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $user = null;
            if($request->hasFile('Image')) {
                $user = str_replace('public/', '', $request->file('Image')->store('public/image'));
            }
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE users SET name =
                :name, Nomor_ID = :Nomor_ID, Nomor_HP = :Nomor_HP, Image = :Image where id = :id',
                [
                'id' => auth()->user()->id,
                'name' => $request->name,
                'Nomor_ID' => $request->Nomor_ID,
                'Nomor_HP' => $request->Nomor_HP,
                'Image' => $user,
                ]
                );
         return redirect()->route('User.profile')->with('success', 'Data user berhasil diubah');
     }
}
