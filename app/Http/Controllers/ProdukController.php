<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;  

class ProdukController extends Controller
{
    //
    function show(){        
        $data['produk'] = Produk::all();
        $data['cari'] = "";
        return view('produk',$data);
    }

    function add(){
        $data = [
            'action'=> url('produk/create'),
            'tombol'=> 'simpan',
            'produk'=> (object)[
                'foto' => '',
                'nama' => '',
                'deskripsi' => '',
                'harga' => '',

            ]
            ];
            return view ('form_produk',$data);
    }
    function create(Request $request){
      Produk::create([
          'foto' => $request->file('foto')->store('foto'),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);
        return redirect('produk');
    }
    function hapus($id){
        Produk::where('id_produk',$id)->delete();
        return redirect('produk');
    }

    function edit($id){
        $data['produk'] = Produk::find($id);
        $data['action'] = url('produk/update').'/'.$data['produk']->id_produk;
        $data['tombol'] = "Update";
        
        return view('form_produk',$data);
    }

    function update(Request $request){
    Produk::where('id_produk',$request->id)->update([
        'foto' => $request->file('foto')->store('foto'),
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
             
    ]);

    return redirect('produk');
}

    function search(Request $request){
        $data['produk'] = Produk::where('nama',$request->cari)->paginate();

        $data['cari'] = $request->cari;
        return view('poduk',$data);
    }
}
