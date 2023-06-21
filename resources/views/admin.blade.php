
<a href="{{ url('admin/add') }}">Tambah Data</a>
<table border="1"  class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>TYPE USER</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
        <th>PASSWORD</th>
        <th>FOTO</th>
        <th>AKSI</th>
    </tr>
    @foreach ($admin as $key => $item )
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->type_user }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->no_hp }}</td>
        <td>{{ $item->password }}</td>
        <td>
            <img src="storage/{{ $item->foto }}" alt="" width="150">
        </td>
        <td>
            <a href="/admin/hapus/{{ $item->id }}" class="btn btn-primary" onclick="return-window.confirm('Hapus Data Ini')">Hapus</a>
            <a href="/admin/edit/{{ $item->id }}" class="btn btn-danger">Edit</a>
        </td>
    </tr>

    @endforeach

</table>

