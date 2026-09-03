<!DOCTYPE html>

<html>
<head>
    <title>Register</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="bg-light">

<div class="container">


<div class="row justify-content-center align-items-center min-vh-100">

    <div class="col-md-6">

        <div class="card shadow-sm">

            <div class="card-body p-4">

                <h2 class="text-center mb-4">
                    Register
                </h2>

                <form action="{{ route('register.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            Nama
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Masukkan nama"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control"
                               placeholder="Masukkan username"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            No Telepon
                        </label>

                        <input type="text"
                               name="no_telpon"
                               class="form-control"
                               placeholder="Masukkan nomor telepon"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Masukkan email"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Masukkan password"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Konfirmasi Password
                        </label>

                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Ulangi password"
                               required>
                    </div>

                    <button type="submit"
                            class="btn btn-primary w-100">
                        Daftar
                    </button>

                </form>

                <p class="text-center mt-3 mb-0">
                    Sudah punya akun?
                    <a href="{{ route('login') }}"
                       class="text-decoration-none">
                        Login
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>


</div>

</body>
</html>
