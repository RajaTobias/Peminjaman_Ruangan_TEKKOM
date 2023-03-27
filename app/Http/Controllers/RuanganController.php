<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RuanganController extends Controller
{
        public function store(Request $request) {
        $request->validate([
        'Nama_ruangan' => 'required',
        'Jenis_ruangan' => 'required',
        // 'Kapasitas_ruangan' => 'required',
        // 'Deskripsi_ruangan' => 'required',
        'lcd_proyektor' => 'nullable|lcd_proyektor|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        $ruangans = null;
            if($request->hasFile('lcd_proyektor')) {
                $ruangans = str_replace('public/', '', $request->file('lcd_proyektor')->store('public/lcd_proyektor'));
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan:<br>' . $e->getMessage() . '<br>Silahkan coba lagi.');
            }
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO ruangans(Nama_ruangan,
        Jenis_ruangan,lcd_proyektor) VALUES
        (:Nama_ruangan, :Jenis_ruangan,:lcd_proyektor)',
        [
        'Nama_ruangan' => $request->Nama_ruangan,
        'Jenis_ruangan' => $request->Jenis_ruangan,
        // 'Kapasitas_ruangan' => $request->Kapasitas_ruangan,
        // 'Deskripsi_ruangan' => $request->Deskripsi_ruangan,
        'lcd_proyektor' => $ruangans,
        ]
        );

        
        return redirect()->route('Admin.tambahruangan')->with('success', 'Data ruangan berhasil disimpan');

        }
        

    public function delete($id){
        Ruangan::where('id_ruangan', $id)->delete();
        return redirect()->route('ruangan.index')->with('success', 'Data ruangan berhasil dihapus');
    }

    public function index() {
        $datas = DB::select('select * from ruangans');
        return view('Admin.ruangan')
        
        ->with('datas', $datas);
    }

    public function indexuser() {
        $datas = DB::select('select * from ruangans');
        return view('User.ruangan')
        
        ->with('datas', $datas);
    }

    public function desc($id){
        $datas = DB::select('select * from ruangans where id = :id', ['id'=> $id]);
        return view('Admin.deskripsiA101')->with('datas',$datas);
    }

    public function descuser($id){
        $datas = DB::select('select * from ruangans where id = :id', ['id'=> $id]);
        return view('User.deskripsiA101')->with('datas',$datas);
    }

    public function descupdate(Request $request) {
        $request->validate([
            'kursi' => 'nullable',
            'smart_tv' => 'nullable',
            'layar_proyektor' => 'nullable',
            'lcd_proyektor' => 'nullable',
            'ac' => 'nullable',
            'kapasitas' => 'nullable'
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE ruangans SET kursi =
                :kursi, smart_tv = :smart_tv, layar_proyektor = :layar_proyektor, lcd_proyektor = :lcd_proyektor, ac =:ac, kapasitas = :kapasitas where id = :id',
                [
                'id' => $id,
                'kursi' => $request->kursi,
                'smart_tv' => $request->smart_tv,
                'layar_proyektor' => $request->layar_proyektor,
                'lcd_proyektor' => $request->lcd_proyektor,
                'ac' => $request->ac,
                'kapasitas' => $request->kapasitas,
                ]
                );
         return redirect()->route('Admin.deskripsiA101')->with('success', 'Data user berhasil diubah');
     }
    //  public function insert($id) {
    //     $data = DB::table('ruangans')->where('id',
    //     $id)->first();
    //     return view('Admin.tambahruangan')->with('data', $data);
    //     }
    //     public function update($id, Request $request) {
    //     $request->validate([
    //         'Nama_ruangan' => 'required',
    //         'Jenis_ruangan' => 'required',
    //     ]);
    //     // Me
    // }

    
}
