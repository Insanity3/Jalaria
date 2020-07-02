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
            </div>
    </div>           

<?php require 'componentes/footer.php'?>