<?php

function connect_dataBase() {
    return new PDO("mysql:dbname=mydb; host=localhost", username:"root", password:"");
}


// ---------------crud---
#-----------READ
function index() {
    $pdo = connect_dataBase();
    return $pdo->query("select * from produits p join categorie c where p.idCat= c.idCat order by p.idCat")->fetchAll(PDO::FETCH_OBJ);
}

#-----------CREATE
function create(){
    // values(code, desg, qtes, pu, idCat, nomPr)
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

    $pdo = connect_dataBase();
    $sqlState = $pdo->prepare('insert into produits values(?, ?, ?, ?, ?, ?)');
    return $sqlState->execute([$code, $desg, $qtes, $pu, $idCat, $nomPr]);
}

#-----------Update
function viewEdit($code){
    $pdo = connect_dataBase();
    $sqlState = $pdo->prepare('SELECT * FROM produits WHERE code = ?');
    $sqlState->execute([$code]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}
function edit($code, $desg, $qtes, $pu, $idCat,$nomPr){
    $pdo = connect_dataBase();
    $sqlState = $pdo->prepare('UPDATE produits SET desg=?, qtes=?, pu=?, idCat=?, nomPr=? WHERE code = ?');
    return $sqlState->execute([$desg, $qtes, $pu, $idCat, $nomPr, $code]);
}


#-----------Delete
function destroy($code){
    $pdo = connect_dataBase();
    $sqlState = $pdo->prepare('DELETE FROM produits WHERE code = ?');
    return $sqlState->execute([$code]);
}



