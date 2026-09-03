<!DOCTYPE html>

<html>
<head>
    <title>Login</title>


<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="bg-light">

<div class="container">


<div class="row justify-content-center align-items-center min-vh-100">

    <div class="col-md-5">

        <div class="card shadow-sm">

            <div class="card-body p-4">

                <h2 class="text-center mb-4">
                    Login
                </h2>

                <form action="{{ route('login.store') }}" method="POST">

                    @csrf

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

                    <button type="submit"
                            class="btn btn-primary w-100">
                        Login
                    </button>

                </form>

                <p class="text-center mt-3 mb-0">
                    Belum punya akun?
                    <a href="{{ route('register') }}"
                       class="text-decoration-none">
                        Daftar
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>


</div>

</body>
</html>
