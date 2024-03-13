<?php
    $title = "Modifier Produits";

    ob_start();
?>

<div class="containerr">
  <form action="update.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="NomCat">Nom Category</label>
        <select class="form-control" id="NomCat" name="nomCat">
          <option value="soft">SOFT</option>
          <option value="hard">HARD</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Code">Code</label>
        <input readonly type="text" class="form-control" value="<?=$produit->code?>" name="code">
      </div>
      <div class="form-group col-md-8">
        <label for="Desg">Description</label>
        <textarea va class="form-control" name="desg" rows="3"><?=$produit->desg?></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="Qtes">Quantity</label>
        <input type="number" class="form-control" value="<?=$produit->qtes?>" name="qtes">
      </div>
      <div class="form-group col-md-4">
        <label for="pu">Unit Price</label>
        <input type="number" class="form-control" value="<?=$produit->pu?>" name="pu">
      </div>
      <div class="form-group col-md-4">
        <label for="NomProduit">Nom Produit</label>
        <input type="text" class="form-control" value="<?=$produit->nomPr?>" name="nomPr">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</div>


<?php $content=ob_get_clean(); ?>

<?php include_once "views/layout.php";?>
