<?php
require("conexion.php");
if(empty($_POST['email']) || empty($_POST['motpass'])){
    header("location:fix.php?msg=tout les champ obligatoire !!");
    exit;
}
else{
    $rech=$con->prepare("SELECT * FROM client WHERE email=?");
$rech->execute(array($_POST['email']));
$donn=$rech->fetch();
if ($donn) {
    $update1=$con->prepare("UPDATE client SET motpass=?  WHERE email=?");
    $update1->execute(array($_POST['motpass'],$_POST['email']));
    header("location:login.php");
    exit;
}

$rech1=$con->prepare("SELECT * FROM vendeur WHERE email=?");
$rech1->execute(array($_POST['email']));
$donn1=$rech->fetch();

if ( $donn1 ) {
    $update1=$con->prepare("UPDATE vendeur SET motpass=?  WHERE email=?");
    $update1->execute(array($_POST['motpass'],$_POST['email']));
    header("location:login.php");
    exit;
}
else{
    header("location:fix.php?msg=email not corect");
    exit;
}
}

?>