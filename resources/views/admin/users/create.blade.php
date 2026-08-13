<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

    <h2>Tambah User</h2>

   <form action="{{ route('admin.user.store') }}" method="POST">

        @csrf

        <p>
            Nama
            <br>
            <input type="text" name="name">
        </p>

        <p>
            Username
            <br>
            <input type="text" name="username">
        </p>

        <p>
            No Telepon
            <br>
            <input type="text" name="no_telpon">
        </p>

        <p>
            Email
            <br>
            <input type="email" name="email">
        </p>

        <p>
            Password
            <br>
            <input type="password" name="password">
        </p>

        <p>
            Role
            <br>

            <select name="role">

                <option value="">
                    Pilih Role
                </option>

                <option value="admin">
                    Admin
                </option>

                <option value="petugas">
                    Petugas
                </option>

                <option value="siswa">
                    Siswa
                </option>

            </select>

        </p>

        <button type="submit">
            Simpan
        </button>

    </form>

</body>
</html>