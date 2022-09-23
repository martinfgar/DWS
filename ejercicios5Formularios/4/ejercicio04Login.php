</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <form action="ejercicio04Login.php" method="post" class="login-form">
        <p class="login-text">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
        </p>
        <input type="text" name="user" class="login-username" autofocus="true" required="true" placeholder="Erabiltzailea" />
        <input type="password" name="pass" class="login-password" required="true" placeholder="Pasahitza" />
        <?php

        $passHash = password_hash('root', PASSWORD_ARGON2I);

        $user_pass = ["martin" => $passHash];
        if (isset($_POST['user'])) {
            if (password_verify($_POST['pass'], $user_pass[$_POST['user']])) {
                echo "<p style='color:white'>Login correcto</p>";
            } else {
                echo '<p style="color:red">usuario o contraseña incorrectos</p>';
            }
        }
        ?>
        <input type="submit" name="Login" value="Login" class="login-submit" />
    </form>

    <a href="#" class="login-forgot-pass">forgot password?</a>

    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>
    <!-- partial -->

</body>

</html>