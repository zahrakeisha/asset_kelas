<!DOCTYPE html>

<html>
<head>
    <title>Tambah User</title>


<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<div class="container mt-5">


<div class="card shadow-sm">

    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Tambah User</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.users.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Masukkan nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>

                <input type="text"
                       name="username"
                       class="form-control"
                       placeholder="Masukkan username">
            </div>

            <div class="mb-3">
                <label class="form-label">No Telepon</label>

                <input type="text"
                       name="no_telpon"
                       class="form-control"
                       placeholder="Masukkan nomor telepon">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Masukkan email">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password">
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>

                <select name="role" class="form-select">

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

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-primary">
                    Simpan
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
