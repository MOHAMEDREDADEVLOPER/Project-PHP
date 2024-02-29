<?php
require "conexion.php";
session_start();

$deleteVendre = $con->prepare("DELETE FROM vendre WHERE id_produit = ?");
$deleteVendre->execute([$_POST['id_produit']]);

$r = $con->prepare("DELETE FROM produit WHERE id_produit = ?");
$r->execute([$_POST['id_produit']]);

header("location: vendeur.php");
?>
