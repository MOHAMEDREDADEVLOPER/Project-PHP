<?php
require "conexion.php";
session_start();    
    
if(isset($_POST['btnAddProuct'])){
  if(isset($_FILES['image1'])){
    $image1 = $_FILES['image1']['name'];
    move_uploaded_file($_FILES['image1']['tmp_name'], 'ImagesProduit/' . $image1);
  }
  if(isset($_FILES['image2'])){
    $image2 = $_FILES['image2']['name'];
    move_uploaded_file($_FILES['image2']['tmp_name'], 'ImagesProduit/' . $image2);
  }
  if(isset($_FILES['image3'])){
    $image3 = $_FILES['image3']['name'];
    move_uploaded_file($_FILES['image3']['tmp_name'], 'ImagesProduit/' . $image3);
  }

  // $_POST['prix'] = $_POST['prix']*((100-$_POST['promo'])*0.01);
  $_POST['prix'] = floatval($_POST['prix']) * ((100 - floatval($_POST['promo'])) * 0.01);
  if (!empty($_POST['titre']) || !empty($_POST['description']) || !empty($_POST['quantite']) || !empty($_POST['prix']) || !empty($_POST['promo']) || !empty($_POST['categorie']) ) {
    $ajouteProduit = $con->prepare("INSERT INTO produit  VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajouteProduit->execute(
        [
        $_POST['titre'], $_POST['description'], $_POST['quantite'],  $_POST['prix'],
        $image1, $image2, $image3, $_POST['promo'], $_POST['categorie']
    ]);
    $idP = $con->lastInsertId();

    $ajouteVendre = $con->prepare('INSERT INTO vendre VALUES (?,?)');
    $ajouteVendre->execute(array($_SESSION['id_vendeur'], $idP));

    // unset($_POST);
    // header("location:ajouterProduit.php");
    header('location:vendeur.php');
  }
  else {
    
    header("location:vendeur.php?msg2=tout les champ obligatoire");
    
  }
}


?>