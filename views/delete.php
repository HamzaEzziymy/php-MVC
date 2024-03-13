<?php
$title = "Supprimer Produits";

ob_start();
?>

<div class="bg-warning rounded  p-2 w-25 text-center text-white">
    <h5>Supprimer Produit?</h5>
    <div class="m-5 d-flex justify-content-around ">
        <a class="col-6 btn btn-danger" href="destroy.php?code=<?php echo $code ?>">Oui</a>
        <a class="col-6 btn btn-primary" href="index.php">No</a>
    </div>
</div>

<?php
$content = ob_get_clean();


include_once "views/layout.php";
