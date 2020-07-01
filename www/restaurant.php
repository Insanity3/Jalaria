<?php require 'back/restaurantb.php';?>
<?php require 'componentes/header.php'?>

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
                

<?php require 'componentes/footer.php'?>