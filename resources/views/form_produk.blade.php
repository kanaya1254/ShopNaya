@extends("navbar")
@section("naya")
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
@csrf
<table>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama" id="nama" value="{{ $produk->nama }}"></td>
    </tr>
    <tr>
        <td>DESKRIPSI</td>
        <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $produk->deskripsi }}"></td>
    </tr>
    <tr>
        <td>HARGA</td>
        <td><input type="text" name="harga" id="harga" value="{{ $produk->harga }}"></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><img src="/storage/{{$produk->foto}}" width="100" alt=""></td>
        <td><input type="file" name="foto" id="foto" class="form-control" value="{{$produk->foto}}"></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="Submit" value="{{ $tombol }}">
        </td>
    </tr>
</table>
@endsection
