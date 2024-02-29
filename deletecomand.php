<?php
require("conexion.php");
$numcomand=$_GET['numcomand'];
$delete=$con->prepare("DELETE FROM comand WHERE num_comand=?");
$delete->execute(array($numcomand));
header("location:panier.php");

?>