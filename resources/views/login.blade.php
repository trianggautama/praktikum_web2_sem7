<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="">
        <div class="form-group">
            <label for="">username</label>
            <input type="text" name="username">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button> <br>
        <a href="{{route('register')}}">belum punya akun ? daftar disini.</a>
    </form>
</body>
</html>