<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>

    <h2>Data User</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('admin.users.create') }}">
        Tambah User
    </a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->no_telpon }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>

            <td>
                <a href="{{ route('admin.users.edit', $user->id) }}">
                    Edit
                </a>

                <form
                    action="{{ route('admin.users.destroy', $user->id) }}"
                    method="POST"
                    style="display:inline"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>