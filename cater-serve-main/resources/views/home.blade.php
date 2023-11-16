<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    @auth
    <p>
        congrats u logged in
    </p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    @else
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <button>Register</button>
    </form>
    <h2>login</h2>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="loginname" placeholder="Name">
        <input type="password" name="loginpassword" placeholder="Password">
        <button>Login</button>
    </form>
    @endauth
</body>
</html>