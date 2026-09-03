<!DOCTYPE html>

<html>
<head>
    <title>Edit User</title>


<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<div class="container mt-5">


<div class="card shadow-sm">

    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit User</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>

                <input type="text"
                       name="username"
                       class="form-control"
                       value="{{ $user->username }}">
            </div>

            <div class="mb-3">
                <label class="form-label">No Telepon</label>

                <input type="text"
                       name="no_telpon"
                       class="form-control"
                       value="{{ $user->no_telpon }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ $user->email }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Kosongkan jika tidak diubah">
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>

                <select name="role" class="form-select">

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
                        Siswa
                    </option>

                </select>

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('admin.users.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

</div>

</body>
</html>
