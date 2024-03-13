<?php
    $title = "Liste des produits";
    ob_start();
?>

<table class="table table-striped border border-2 border-solid">
    <thead>
        <tr>
            <th>idCat</th>
            <th>NomCat</th>
            <th>Code</th>
            <th>Desg</th>
            <th>Qtes</th>
            <th>pu</th>
            <th>Nom Produit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($produits as $produit):?>
            <tr>
            <td><?= $produit->idCat?></td>
            <td><?= $produit->nomCat?></td>
            <td><?= $produit->code?></td>
            <td><?= $produit->desg?></td>
            <td><?= $produit->qtes?></td>
            <td><?= $produit->pu."DH"?></td>
            <td><?= $produit->nomPr?></td>
            <td class="row">
                <a class="btn btn-warning btn-sm" href="index.php?action=edit&code=<?php echo $produit->code ?>"> Modifier </a> ||
                <a class="btn btn-danger btn-sm" href="index.php?action=delete&code=<?php echo $produit->code ?>">Supprimer</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php?action=create" class="btn btn-primary mb-3">Ajouter</a>
<?php $content=ob_get_clean(); ?>


<?php include_once "views/layout.php";?>
