<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login"
    method="POST">
        @csrf

        <label for="username">username:</label>
        <input type="username" name="username" id="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>

        <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="/regis">Register</a></p>
</body>
</html>
