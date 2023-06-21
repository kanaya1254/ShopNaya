<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    //
    function show(){        
        $data['admin'] = Admin::orderBy('id','asc')->get();
        $data['cari'] = "";
        return view('admin',$data);
    }

    function add(){
        $data = [
            'action'=> url('admin/create'),
            'tombol'=> 'simpan',
            'admin'=> (object)[
                'type_user' => '',
                'nama' => '',
                'alamat' => '',
                'no_hp' => '',
                'password' => ''
            ]
            ];
            return view ('form_admin',$data);
    }
    function create(Request $request){
        $namafile = $request->id.".".$request->file('foto')->getClientOriginalExtension();
        Admin::create([
            'type_user' => $request->type_user,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => $request->password,
            'foto' => $request->file('foto')->storeAs('foto', $namafile)
        ]);
        return redirect('admin');
    }
    function hapus($id){
        Admin::where('id',$id)->delete();
        return redirect('admin');
    }

    function edit($id){
        $data['admin'] = Admin::find($id);
        $data['action'] = url('admin/update').'/'.$data['admin']->id;
        $data['tombol'] = "Update";

        // $data['siswa'] = Siswa::Where('nis',$id)->get();
        return view('form_admin',$data);
    }

    function update(Request $request){
    Admin::where('id',$request->id)->update([
            'type_user' => $request->type_user,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => $request->password
             
    ]);

    return redirect('admin');
}

    function search(Request $request){
        $data['admin'] = Admin::where('nama',$request->cari)->paginate();

        $data['cari'] = $request->cari;
        return view('admin',$data);
    }
}
