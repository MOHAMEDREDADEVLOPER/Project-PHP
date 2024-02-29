<?php

require("conexion.php") ;
session_start();
$logo = $_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'], 'vendeurlogo/' . $logo);
if (empty($_POST['type']) || empty($_POST['nomcomplete']) || empty($_POST['ville']) || empty($_POST['email']) || empty($_POST['motpass']) ) {
    header("location:signin.php?msg1=tout les champ obligatoire");
    exit;
}
 else {

    $ajouterclient = $con->prepare("INSERT INTO `vendeur`(`type`, `logo`, `nomcomplete`, `ville`, `email`, `motpass`, `datenaissance`, `telephone`, `adress`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajouterclient->execute(
        [
        $_POST['type'], $logo, $_POST['nomcomplete'], $_POST['ville'],  $_POST['email'],
        $_POST['motpass'], $_POST['datenaissance'], $_POST['telephone'], $_POST['adress']
    ]);
    $_SESSION['email'] = $_POST['email'];
    header("location:vendeur.php");
    exit;
}

?>



