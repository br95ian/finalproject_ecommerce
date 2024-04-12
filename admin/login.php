<!DOCTYPE html>
<html>
<head>
    <title>ChoresBud</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
    <form method="POST" action="../actions/login_user.php">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" id="email" name="email" placeholder="Email" required>
            <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class="bx bxs-lock"></i>
        </div>
        <div class="remember-forgot">
            <label for="checkbox">  <input type="checkbox"> Remember Me</label>
        </div>
        <button type="submit" name="login" class="btn">Login</button>
        <div class="register">
            <span class="text-center text-sm">Don't have an account?<a href="../login/register.php"> Sign up!</a></span>
        </div>

    </form>

    </div>

</body>
</html>