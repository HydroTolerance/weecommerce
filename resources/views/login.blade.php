<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/auth/login.blade.php -->
<form method="POST" action="{{ route('login.post') }}">
    @csrf
    
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <button type="submit">Login</button>
</form>

</body>
</html>