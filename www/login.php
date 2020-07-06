<?php 
include 'componentes/header.php';
require 'back/loginb.php';
?>

<form method="POST" name="login" class="sesion">
                <input type="text" class="input" autofocus placeholder="Usuario" name ="user" >
                <input type="password" class="input" placeholder="Contraseña" name ="pass" >
                <input type="submit" class="btn" value="Login" name="submit" >
                <a href="register.php">Crear una cuenta</a>
                
                <div>
                    <ul>
                        <?php echo $mensaje ?>
                    </ul>
                </div>
</form>
<?php include 'componentes/footer.php' ?>