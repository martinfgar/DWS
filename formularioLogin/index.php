</html>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="login-form">
        <p class="login-text">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
        </p>
        <input type="text" name="user" class="login-username" autofocus="true" required="true" placeholder="Erabiltzailea" />
        <input type="password" name="pass" class="login-password" required="true" placeholder="Pasahitza" />
        <input type="submit" name="Login" value="Login" class="login-submit" />
    </form>
    <?php
    $user_pass = ["martin" => "root"];
    if (isset($_GET['user'])) {
        if ($user_pass[$_GET['user']] == $_GET['pass']) {
            header("Location: https://google.com");
            die();
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
    ?>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
<!-- partial -->
  
</body>
</html>
