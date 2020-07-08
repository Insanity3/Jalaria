<?php 
session_start();
require 'back/loginb.php';
include 'componentes/header.php';

?>
<div class="container mt-5 text-center">
            <form method="POST" name="login" class="sesion form">
            <div class="form-row justify-content-center">
                <input type="text" class="input" autofocus placeholder="Usuario" name ="user" >
                <input type="password" class="input" placeholder="Contraseña" name ="pass" >
                <input type="submit" class="btn" value="Login" name="submit" >
                
                
                <div>
                    <ul>
                        <?php echo $mensaje ?>
                    </ul>
                </div>
                
                </div>
                <a href="register.php">Crear una cuenta</a>
                
</form>
</div>

<?php include 'componentes/footer.php' ?>