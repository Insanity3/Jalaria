<?php 
session_start();
require 'back/registerb.php';
include 'componentes/header.php'; 

?>
<div class="container mt-5 text-center">
<form method="POST"  name="register" class="sesion form">
<div class="form-row justify-content-center">
                <input type="text" class="input" autofocus placeholder="Usuario" required name="register_user">
                <input type="password" class="input" placeholder="Contraseña" required name="register_password">
                <input type="password" class="input" placeholder="Repetir contraseña" required name="register_password2">
                <input type="submit" class="btn" value="Registrarse" name="register_submit">
                

                <div>
                    <ul>

                        <?php echo $mensaje ?>
                    </ul>
                </div>
</div>
<a href="login.php">Ya tengo una cuenta</a>
</form>
</div>
<?php include 'componentes/footer.php'; ?>