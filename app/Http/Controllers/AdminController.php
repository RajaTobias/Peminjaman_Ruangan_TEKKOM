<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function indexprofile() {
        $datas = DB::select('select * from users');
        return view('Admin.profile')
        
        ->with('datas', $datas);
    }

    public function edit() {
        $data = DB::table('users');
        return view('Admin.editprofile')->with('data', $data);
        }
        public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'Nomor_ID' => 'nullable',
            'password' => 'nullable',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $user = null;
            if($request->hasFile('Image')) {
                $user = str_replace('public/', '', $request->file('Image')->store('public/image'));
            }
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE users SET name =
                :name, Nomor_ID = :Nomor_ID, password=:password,Image = :Image where id = :id',
                [
                'id' => auth()->user()->id,
                'name' => $request->name,
                'Nomor_ID' => $request->Nomor_ID,
                'password' => Hash::make($request->password),
                'Image' => $user,
                ]
                );
         return redirect()->route('Admin.profile')->with('success', 'Data admin berhasil diubah');
     }

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

    public function change_password($id)
    {
        DB::update('UPDATE users SET password = "TEKNIKKOMPUTER123" WHERE id = :id', ['id' => $id]);

        return redirect()->route('Admin.ubahuser')->with('success', 'Password berhasil diganti');
    }

    public function index(Request $request)
    {    if ($request->has('search')){
        $datas = DB::select('SELECT id, name, is_admin, is_TU FROM users where name = :search;',[
            'search'=>$request->search
        ]);
        return view('Admin.ubahuser', ['datas' => $datas])
        
        ->with('datas', $datas);
        }
        else{
            $datas = DB::table('users')->paginate(9) ;
            return view ('Admin.ubahuser', ['datas' => $datas])
            ->with('datas', $datas);
        }
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts =DB::table('users')
            ->where('name', 'LIKE', "%{$search}%")
            // ->orWhere('Tipe', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('Admin.ubahuser',['users' => $posts]);
    }

}