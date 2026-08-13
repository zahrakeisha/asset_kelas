<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="{{ route('login.store') }}" method="POST">
    @csrf

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

    <button type="submit">Login</button>

</form>

<p>
    <a href="{{ route('register') }}">Daftar</a>
</p>

</body>
</html>