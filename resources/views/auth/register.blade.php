<h1>Register User</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    Nama: <input type="text" name="name" >  <br><br>
    Email: <input type="email" name="email" >  <br><br>
    Password: <input type="password" name="password" >  <br><br>
    Konfirmasi Password: <input type="password" name="password_confirmation"> <br><br>
    Role: 
    <select name="role">
        <option value="1">Mahasiswa</option>
        <option value="2">Dosen</option>
    </select>
    <br><br>
    <button type="submit">Simpan</button>
</form>