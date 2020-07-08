<?php session_start() ?>
<?php require 'back/restaurantb.php';?>
<?php require 'componentes/header.php'?>
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?php echo $foto ?>");'>
            <img src="" alt="">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
            <h3><?php echo $row['nombre']?></h3>
            <p>Valoracion: <?php echo $row['valoracion']?></p>
            <p>Precio: <?php echo $row['precios']?></p>
            <p>Email: <?php echo $row['email']?></p>
            <p>Www: <?php echo $row['web']?></p>
            <p>Horario: <?php echo $row['horario']?></p>
            <p>Tipos de cocina: <?php echo $row['cocina']?></p>
            <p>Localidad:  <?php echo $row['localidad']?></p>
            <p>Dirección: <?php echo $row['diceccion']?></p>
            <p>Código postal: <?php echo $row['cp']?></p>
            <p>Teléfono: <?php echo $row['telf']?></p>
            
            </div>
            

          </div>
          

        </div>

      </div>
    </section><!-- End About Section -->
        

        
    <div class="row">
        <div class="col-md d-flex justify-content-center flex-column text-center align-items-center">
          <img src="<?php echo $img?>" alt="">
        <iframe src="<?php echo $row['maps']?>" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <!-- Formulario opinion -->
                <?php 
                if(isset($_SESSION['usuario'])){
                ?>
                    <div container mt-5>
              
                    <h3 class="p-5">Deja tu valoración!</h3>
                        <form action="" method="POST" name="opinion" class="form">
                        <div class="form-row justify-content-center">
                            <select name="valoracion" id="" class="col-md-4 form-group">
                                <option disabled selected>Valoración</option>
                                <option value="1">1 estrella</option> 
                                <option value="2">2 estrellas</option> 
                                <option value="3">3 estrellas</option>
                                <option value="4">4 estrellas</option> 
                                <option value="5">5 estrellas</option>
                            </select>
                            <textarea name="mensaje" id="" class="col-md-8 form-group" placeholder="Escríbe tu mensaje">
                            </textarea>
                            <input type="submit" name="enviar">
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
                <!-- Formulario de reservas -->
                <div class="container">
                <h3 class="p-5">Reserva!</h3>
                <form action="" method="POST" name="reserva" class="form">
                <div class="form-row justify-content-center">
                    <input type="text" name="nombre" placeholder="Ca na Carmen">
                    <input type="date" name="dia" step="1" min="2020-01-01" mas="2022-01-01">
                    <input type="time" name="hora">
                    <textarea name="comensales" placeholder="Nombre de los comensales"></textarea>
                    <input type="submit" name="enviar">
                    </div>
                </form>
                </div>


            </div>  
            </div> 
            </div> 
          


<?php require 'componentes/footer.php'?>