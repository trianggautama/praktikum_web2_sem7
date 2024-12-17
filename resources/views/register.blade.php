<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="">
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="">username</label>
            <input type="text" name="username">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" name="password">
        </div>
        <div class="form-group">
            <label for="">confirm password</label>
            <input type="password" name="confirm_password">
        </div>
        <button type="submit">register</button> <br>
        <a href="{{route('login')}}">Kembali ke halaman login</a>
    </form>
</body>
</html>