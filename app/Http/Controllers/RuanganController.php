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
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);
        $ruangans = null;
            if($request->hasFile('image')) {
                $ruangans = str_replace('public/', '', $request->file('image')->store('public/image'));
            }
        DB::insert('INSERT INTO ruangans(Nama_ruangan,
        Jenis_ruangan,image) VALUES
        (:Nama_ruangan, :Jenis_ruangan,:image)',
        [
        'Nama_ruangan' => $request->Nama_ruangan,
        'Jenis_ruangan' => $request->Jenis_ruangan,
        'image' => $ruangans,
        ]
        );

        
        return redirect()->route('Admin.tambahruangan')->with('success', 'Data ruangan berhasil disimpan');

        }

        public function edit($id){
            $datas = DB::select('select * from ruangans where id = :id', ['id'=> $id]);
            return view('Admin.editruang')->with('datas',$datas);
        }

        public function update($id, Request $request) {
            $request->validate([
                'Nama_ruangan' => 'required',
                'Jenis_ruangan' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5000'
            ]);
            $ruangans = null;
            if($request->hasFile('image')) {
                $ruangans = str_replace('public/', '', $request->file('image')->store('public/image'));
            }
            DB::update('UPDATE ruangans SET Nama_ruangan =
                    :Nama_ruangan, Jenis_ruangan = :Jenis_ruangan, image = :image where id = :id',
                    [
                    'id' => $id,
                    'Nama_ruangan' => $request->Nama_ruangan,
                    'Jenis_ruangan' => $request->Jenis_ruangan,
                    'image' => $ruangans,
                    ]
                    );
             return redirect()->route('Admin.ruangan',['id' => $id])->with('success', 'Data user berhasil diubah');
         }
        

        public function delete($id) {
            DB::delete('DELETE FROM ruangans WHERE id =
            :id', ['id' => $id]);
            return redirect()->route('Admin.ruangan')->with('success', 'Data berhasil dihapus');
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
        $datas = DB::select('select r.id, r.Nama_ruangan, r.Jenis_ruangan, r.image, r.kursi, r.kursi, r.smart_tv, r.layar_proyektor, r.lcd_proyektor, r.ac,
        r.kapasitas, r.papan_tulis, i.image FROM ruangans r LEFT JOIN images_ruangans i ON r.id = i.id_ruangan where r.id = :id', ['id'=> $id]);
        return view('Admin.deskripsiA101')->with('datas',$datas);
    }
    

    public function descuser($id){
        $datas = DB::select('select r.id, r.Nama_ruangan, r.Jenis_ruangan, r.image, r.kursi, r.kursi, r.smart_tv, r.layar_proyektor, r.lcd_proyektor, r.ac,
        r.kapasitas, r.papan_tulis, i.image FROM ruangans r LEFT JOIN images_ruangans i ON r.id = i.id_ruangan where r.id = :id', ['id'=> $id]);
        return view('User.deskripsiA101')->with('datas',$datas);
    }

    public function descedit($id){
        $datas = DB::select('select * from ruangans where id = :id', ['id'=> $id]);
        return view('Admin.fasilitas')->with('datas',$datas);
    }

    public function descupdate($id, Request $request) {
        $request->validate([
            'kursi' => 'nullable',
            'smart_tv' => 'nullable',
            'layar_proyektor' => 'nullable',
            'lcd_proyektor' => 'nullable',
            'image' => 'nullable',
            'ac' => 'nullable',
            'kapasitas' => 'nullable',
            'papan_tulis' => 'nullable'
        ]);
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE ruangans SET kursi =
                :kursi, smart_tv = :smart_tv, layar_proyektor = :layar_proyektor, lcd_proyektor = :lcd_proyektor, image = :image, ac =:ac, kapasitas = :kapasitas, papan_tulis = :papan_tulis where id = :id',
                [
                'id' => $id,
                'kursi' => $request->kursi,
                'smart_tv' => $request->smart_tv,
                'layar_proyektor' => $request->layar_proyektor,
                'lcd_proyektor' => $request->lcd_proyektor,
                'image' => $request->image,
                'ac' => $request->ac,
                'kapasitas' => $request->kapasitas,
                'papan_tulis' => $request->papan_tulis
                ]
                );
         return redirect()->route('Admin.deskripsi',['id' => $id])->with('success', 'Data user berhasil diubah');
     }

        public function dropdown($id)
        {
        $datas = DB::select('SELECT id, Nama_ruangan FROM ruangans where id = :id', ['id'=> $id]);
        return view('Admin.fotoruang')
        
        ->with('datas', $datas);
        }

        public function imageedit($id){
            $datas = DB::select('select * from ruangans where id = :id', ['id'=> $id]);
            return view('Admin.fotoruang')->with('datas',$datas);
        }

        public function storeimage($id, Request $request) {
            $request->validate([
            'id_ruangan' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
            ]);
            $ruangans = null;
                if($request->hasFile('image')) {
                    $ruangans = str_replace('public/', '', $request->file('image')->store('public/image'));
                }
            // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
            DB::insert('INSERT INTO images_ruangans(id_ruangan, image) VALUES
            (:id_ruangan, :image)',
            [
            // 'id' => $id,
            'id_ruangan' => $request->id_ruangan,
            'image' => $ruangans,
            ]
            );
    
            return redirect()->route('Admin.fotoruang',['id' => $id])->with('success', 'Data ruangan berhasil disimpan');
    
            }
}