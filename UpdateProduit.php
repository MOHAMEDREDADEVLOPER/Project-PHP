<?php
require "conexion.php";
session_start();    
    
if(isset($_POST['btnProuctUpdate'])){

  if(isset($_FILES['image1Update'])){
    $imageUpdate1 = $_FILES['image1Update']['name'];
    move_uploaded_file($_FILES['image1Update']['tmp_name'], 'ImagesProduit/' . $imageUpdate1);
  }
  if(isset($_FILES['image2Update'])){
    $imageUpdate2 = $_FILES['image2Update']['name'];
    move_uploaded_file($_FILES['image2Update']['tmp_name'], 'ImagesProduit/' . $imageUpdate2);
  }
  if(isset($_FILES['image3Update'])){
    $imageUpdate3 = $_FILES['image3Update']['name'];
    move_uploaded_file($_FILES['image3Update']['tmp_name'], 'ImagesProduit/' . $imageUpdate3);
  }

  // $_POST['prixUpdate'] = $_POST['prixUpdate']*((100-$_POST['promoUpdate'])*0.01);
  // $_POST['prixUpdate'] = $_POST['prixUpdate']*((100-$_POST['promoUpdate'])*0.01);
  $_POST['prixUpdate'] = floatval($_POST['prixUpdate']) * ((100 - floatval($_POST['promoUpdate'])) * 0.01);

  if (!empty($_POST['idProduitUpdate']) || !empty($_POST['titreUpdate']) || !empty($_POST['descriptionUpdate']) || !empty($_POST['quantiteUpdate']) || !empty($_POST['prixUpdate']) || !empty($_POST['promoUpdate']) || !empty($_POST['categorieUpdate']) ) {
    // $UpdateProduit = $con->prepare("UPDATE `produit` SET `titre` = ?, `description` = ?, `quantite` = ?, `prix` = ?, photo1=?, photo2=?, photo3=? `promo` = ?, `categorie` = ?  WHERE `produit`.`id_produit` = ?");
    $UpdateProduit = $con->prepare("UPDATE `produit` SET `titre` = ?, `description` = ?, `quantite` = ?, `prix` = ?, photo1=?, photo2=?, photo3=?, `promo` = ?, `categorie` = ?  WHERE `produit`.`id_produit` = ?");

    $UpdateProduit->execute(
        [
           $_POST['titreUpdate'], $_POST['descriptionUpdate'], $_POST['quantiteUpdate'],  $_POST['prixUpdate'], $imageUpdate1, $imageUpdate2, $imageUpdate3,
     $_POST['promoUpdate'], $_POST['categorieUpdate'], $_POST['idProduitUpdate']  
    ]);
    // $idP = $con->lastInsertId();

    // $ajouteVendre = $con->prepare('INSERT INTO vendre VALUES (?,?)');
    // $ajouteVendre->execute(array($_SESSION['id_vendeur'], $idP));

    // unset($_POST);
    // header("location:ajouterProduit.php");
    header('location:vendeur.php');
  }
  else {
    
    header("location:vendeur.php?msg2=tout les champ obligatoire");
    
  }
}


?>