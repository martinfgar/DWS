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
    <form action="index.php" method="post" class="login-form">
        <p class="login-text">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
        </p>
        <input type="text" name="username" class="login-username" autofocus="true" required="true" placeholder="Erabiltzailea" />
        <input type="password" name="password" class="login-password" required="true" placeholder="Pasahitza" />
        <?php
            if (isset($_POST['username']) && isset($_POST['password'])){
                $mysqli = new mysqli("localhost", "root", "root", "centrofp");
                if ($mysqli->connect_errno) {
                    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }

                //Test username and password => martin:root

                $stmt = $mysqli->prepare("SELECT password FROM auth WHERE username=?");
                $stmt->bind_param("s",$_POST['username']);
                $stmt->execute();
                $resultado = $stmt->get_result();
                // mostrar resultado
                while ($row = $resultado->fetch_assoc()) {
                   $passwdHash = $row['password'];
                }
                /* se recomienda el cierre explícito */
                $mysqli->close();
                if (password_verify($_POST['password'], $passwdHash)){
                    session_start();
                    $_SESSION['authenticated'] = true;
                    header("Location: control.php");
                    exit;
                }else{
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