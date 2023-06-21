@extends('navbar')
@section('naya')
<a href="{{ url('produk/add') }}">tambah data</a>
<table border="1" class="table table-bordered table-hover">
    <tr>
        <th>ID PRODUK</th>
        <th>FOTO</th>
        <th>NAMA</th>
        <th>DESKRIPSI</th>
        <th>HARGA</th>
        <th>AKSI</th>
    </tr>
    @foreach ($produk as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>
        <img src="/storage/{{ $item->foto }}" alt="" width="150">
        </td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>{{ $item->harga }}</td>
        <td>
            <a href="produk/hapus/{{ $item->id_produk }}" onclick="return window.confirm('Hapus Data Ini')" class="btn btn-primary">Hapus</a>
            <a href="produk/edit/{{ $item->id_produk }}" class="btn btn-danger">Edit</a>  
        </td>
    </tr>
    @endforeach
</table>

@endsection