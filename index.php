<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login for account</h1>
    <form method="post" action="login_proses.php">
        <div>
            <label>username</label>
            <input type="text" name="user">
        </div>
        <div>
            <label>password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>