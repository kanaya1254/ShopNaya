
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
@csrf
<table>
    <tr>
        <td>TYPE USER</td>
        <td>
            <input type="radio" name="type_user" id="type_user" value="Admin" {{ $admin->type_user=="admin"?"checked":"" }}>Admin
            <input type="radio" name="type_user" id="type_user" value="Member" {{ $admin->type_user=="member"?"checked":"" }}>Member
        </td>      
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama" id="nama" value="{{ $admin->nama }}"></td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td><input type="text" name="alamat" id="alamat" value="{{ $admin->alamat }}"></td>
    </tr>
    <tr>
        <td>NO HP</td>
        <td><input type="text" name="no_hp" id="no_hp" value="{{ $admin->no_hp }}"></td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input type="password" name="password" id="password" value="{{ $admin->password }}"></td>
    </tr>
    <tr>
        <td>FOTO</td>
        <td>
            <input type="file" name="foto" id="foto">
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <input type="Submit" value="{{ $tombol }}">
        </td>
    </tr>
</table>
</form>


