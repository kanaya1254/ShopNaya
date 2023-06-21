<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class BarangController extends Controller
{
    //
    function show(){
        $data ['produk'] = Produk::all();
        return view('beranda', $data);
    }
    function detail($id){
        $data ['produk'] = Produk::find($id);
        return view('detail_barang',$data);

    }
}
