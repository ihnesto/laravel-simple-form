<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form action="/login" method="post">
        @csrf
            <span>Login</span>
            <input type="text" name="login" id="">
            <span>Password</span>
            <input type="text" name="password" id="">
            <input type="submit" name="submit" id="">
        </form>
    </div>
</body>
</html>