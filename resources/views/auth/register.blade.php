<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form action="{{ route('register.store') }}" method="POST">
    @csrf

    <div>
        <label>Nama</label>
        <input type="text" name="name" required>
    </div>

    <br>

    <div>
        <label>Username</label>
        <input type="text" name="username" required>
    </div>

    <br>

    <div>
        <label>No Telepon</label>
        <input type="text" name="no_telpon" required>
    </div>

    <br>

    <div>
        <label>Email</label>
        <input type="email" name="email" required>
    </div>

    <br>

    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <br>

    <div>
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <br>

    <button type="submit">Daftar</button>

</form>

</body>
</html>