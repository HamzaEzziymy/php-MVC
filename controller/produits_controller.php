<?php

require_once "model/produits_model.php";

// ---------------crud---
#-----------READ
function indexAction(){
    $produits = index();
    require_once "views/liste_produits.php";
}


#-----------CREATE
function createAction(){
    require_once "views/create.php";
}
function storeAction(){
    create();
    header("location:index.php?action=listep");
}


#-----------Update
function editAction(){
    $code = $_GET["code"];
    $produit = viewEdit($code);
    require_once "views/edit.php";
}
function updateAction(){
    $code = $_POST["code"];
    $desg = $_POST["desg"];
    $qtes = $_POST["qtes"];
    $pu = $_POST["pu"];
    if ($_POST["nomCat"]=="soft") {
        $idCat = 2;
    }else{
        $idCat = 1;
    }
    $nomPr = $_POST["nomPr"];

    edit($code, $desg, $qtes, $pu, $idCat, $nomPr);
    header("location:index.php?action=listep");

}

#-----------Delete
function deleteAction(){
    $code = $_GET["code"];
    require_once "views/delete.php";
}

function destroyAction(){
    $code = $_GET["code"];
    destroy($code);
    header("location:index.php?action=listep");
}