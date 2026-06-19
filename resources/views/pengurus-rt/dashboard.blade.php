<!DOCTYPE html>
<html>
<head>
    <title>Pengurus RT Dashboard</title>
</head>
<body>
    <h1>Pengurus RT Dashboard</h1>
    <p>Selamat datang di dashboard pengurus RT</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
