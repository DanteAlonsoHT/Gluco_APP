<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-lg-6 offset-lg-3 form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <div class="link login-link text-left">
                        <a href="../index.html">Volver al inicio</a> 
                    </div>
                    <h2 class="text-center">Iniciar sesión</h2>
                    <p class="text-center">Inicia sesión con tu correo y tu contraseña.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Correo electrónico" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="link forget-pass text-left">
                     <a href="forgot-password.php">¿Olvisdaste tu contraseña?</a>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">¿Todavía no estás registrado? 
                      <a href="signup-user.php">Regístrate ahora</a> 
                  </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>