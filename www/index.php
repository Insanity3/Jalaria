<?php Include 'componentes/header.php' ?>


<main>
<div class="d-flex justify-content-center">
<?php Include 'componentes/buscador.php' ?>
</div>
<div class="d-flex justify-content-center">
<?php
    if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) != 0){
        
        while($row = mysqli_fetch_array($result)){
?>

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href="restaurant.php?id=<?php echo $row['Id']; ?>"><?php echo $row['nombre']?></a></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="restaurant.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary">Ir al restaurante</a>
        </div>
        </div>

<?php }}}?>
</div>
</main>


<?php Include 'componentes/footer.php' ?>
