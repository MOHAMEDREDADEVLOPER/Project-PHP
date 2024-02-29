<?php
session_start();
require("conexion.php");
$email = $_SESSION['email'];
$idproduit = $_SESSION['id_produit'];
$info = $con->prepare("SELECT * FROM client WHERE email=?");
$info->execute(array($email));
$row = $info->fetch();

if (
    empty($_POST['CARDNUMBER']) || empty($_POST['CARDHOLDER']) || empty($_POST['EXPIRATIONMM']) ||
    empty($_POST['EXPIRATIONYY']) || empty($_POST['CVV'])
) {
    header("location:paye.php?msg=tous les champs sont obligatoires !");
    exit;
} else {
    $plan = $con->prepare("INSERT INTO paye(CARDNUMBER,CARDHOLDER,EXPIRATIONMM,EXPIRATIONYY,CVV,id_client) VALUES(?,?,?,?,?,?)");
    $plan->execute(array($_POST['CARDNUMBER'], $_POST['CARDHOLDER'], $_POST['EXPIRATIONMM'], $_POST['EXPIRATIONYY'], $_POST['CVV'], $row['id_client']));

    $contiti = $con->prepare("UPDATE produit SET quantite=quantite-1 WHERE id_produit=?");
    $contiti->execute(array($idproduit));

    $affich = $con->prepare("SELECT * FROM produit INNER JOIN vendre ON produit.id_produit=vendre.id_produit INNER JOIN vendeur ON vendeur.id_vendeur=vendre.id_vendeur ");
    $affich->execute();
    $result = $affich->fetch();

    $contiti = $con->prepare("UPDATE vendeur SET wallet=wallet+? WHERE id_vendeur=?");
    $contiti->execute(array($result['prix'], $result['id_vendeur']));

    header("location:client.php");
    exit;
}
?>
