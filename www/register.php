<?php 
include 'componentes/header.php'; 
require 'back/registerb.php';
?>

<form method="POST"  name="register" class="sesion">
                <input type="text" class="input" autofocus placeholder="Usuario" required name="register_user">
                <input type="password" class="input" placeholder="Contraseña" required name="register_password">
                <input type="password" class="input" placeholder="Repetir contraseña" required name="register_password2">
                <input type="submit" class="btn" value="Registrarse" name="register_submit">
                <a href="login.php">Ya tengo una cuenta</a>

                <div>
                    <ul>

                        <?php echo $mensaje ?>
                    </ul>
                </div>

</form>
<?php include 'componentes/footer.php'; ?>