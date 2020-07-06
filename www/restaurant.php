<?php session_start() ?>
<?php require 'back/restaurantb.php';?>
<?php require 'componentes/header.php'?>
    <div class="row">
        <div class="col-md d-flex justify-content-center flex-column text-center align-items-center">
            <img src="<?php echo $foto ?>" alt="" class="cabecera">
            <h3><?php echo $row['nombre']?></h3>
            <p><?php echo $row['localidad']?></p>
            <p><?php echo $row['diceccion']?></p>
            <p><?php echo $row['cp']?></p>
            <p><?php echo $row['telf']?></p>
            <p><?php echo $row['precios']?></p>
            <p><?php echo $row['valoracion']?></p>
            <p><?php echo $row['email']?></p>
            <p><?php echo $row['web']?></p>
            <p><?php echo $row['horario']?></p>
            <p><?php echo $row['cocina']?></p>
            <iframe src="<?php echo $row['maps']?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
            <!-- Formulario de contacto -->

        

            <!-- Formulario opinion -->
                <?php 
                if(isset($_SESSION['usuario'])){
                ?>
                    <div>
                    <h3>Deja tu valoración!</h3>
                        <form action="" method="POST" name="opinion">
                            <select name="valoracion" id="">
                                <option value=""></option>
                                <option value="1">1 estrella</option> 
                                <option value="2">2 estrellas</option> 
                                <option value="3">3 estrellas</option>
                                <option value="4">4 estrellas</option> 
                                <option value="5">5 estrellas</option>
                            </select>
                            <textarea name="opinion" id="" >
                            </textarea>
                        </form>
                    </div>
                <?php
                }
                ?>
                <!-- Formulario de reservas -->
                <h3>Reserva!</h3>
                <form action="" method="POST" name="reserva">
                    <input type="text" name="nombre">
                    <input type="date" name="dia" step="1" min="2020-01-01" mas="2022-01-01">
                    <input type="time" name="hora">
                    <textarea name="comensales"></textarea>
                </form>


            </div>
    </div>    


<?php require 'componentes/footer.php'?>