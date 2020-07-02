<?php Include 'componentes/header.php' ?>


<main>
<div class="d-flex justify-content-center">
<?php Include 'componentes/buscador.php' ?>

</div>
<div class="d-flex justify-content-center">
<?php
    if(isset($_GET['buscador'])){
        $res = $sql1;
    }else{
        $res = $sql;
    }
    if($result = mysqli_query($conn, $res)){
    if(mysqli_num_rows($result) != 0){
        
        while($row = mysqli_fetch_array($result)){
            $foto = "img/".$row['foto'];
            $valoracion ="img/".$row['valoracion'];
?>

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $foto ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href="restaurant.php?id=<?php echo $row['Id']; ?>"><?php echo $row['nombre']?></a></h5>
            <p class="card-text"><?php echo $row['valoracion']?></p>
            <p class="card-text"><?php echo $row['precios']?></p>
            <p class="card-text"><?php echo $row['localidad']?></p>
            <p class="card-text"><?php echo $row['telf']?></p>
            <a href="restaurant.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary">Ir al restaurante</a>
        </div>
        </div>

<?php }}}?>
</div>
</main>


<?php Include 'componentes/footer.php' ?>
