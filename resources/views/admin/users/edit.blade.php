<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h2>Edit User</h2>
    
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">

        @csrf
        @method('PUT')

        <p>
            Nama
            <br>
            <input type="text"
                name="name"
                value="{{ $user->name }}">
        </p>

        <p>
            Username
            <br>
            <input type="text"
                name="username"
                value="{{ $user->username }}">
        </p>

        <p>
            No Telepon
            <br>
            <input type="text"
                name="no_telpon"
                value="{{ $user->no_telpon }}">
        </p>

        <p>
            Email
            <br>
            <input type="email"
                name="email"
                value="{{ $user->email }}">
        </p>

        <p>
            Password
            <br>
            <input type="password"
                name="password"
                placeholder="Kosongkan jika tidak diubah">
        </p>

        <p>
            Role
            <br>

            <select name="role">

                <option value="admin"
                    {{ $user->role == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>

                <option value="petugas"
                    {{ $user->role == 'petugas' ? 'selected' : '' }}>
                    Petugas
                </option>

                <option value="siswa"
                    {{ $user->role == 'siswa' ? 'selected' : '' }}>
                    Peminjam
                </option>

            </select>

        </p>

        <button type="submit">
            Update
        </button>

    </form>

</body>
</html>