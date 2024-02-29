<?php
require("conexion.php");
session_start();
if(empty($_POST['nom'])||empty($_POST['prenom'])||empty($_POST['username'])||empty($_POST['date_naissance'])||
empty($_POST['ville'])||empty($_POST['genre'])||empty($_POST['telephone'])||empty($_POST['email'])||
empty($_POST['adress'])||empty($_POST['motpass'])){
    header("location:signin.php?msg=tout les champ obligatoire");
    //3atsard message le forme lifiha kaytsjl clienthd page ra 3atkon f action dyala
}
else{

        $ajouterclient=$con->prepare("INSERT INTO `client`( `nom`, `prenom`, `username`, `date_naissance`, `ville`, `telephone`, `adress`, `genre`, `email`, `motpass`) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $ajouterclient->execute(array($_POST['nom'],$_POST['prenom'],$_POST['username'],$_POST['date_naissance'], $_POST['ville'],$_POST['telephone'],$_POST['adress'],$_POST['genre'],$_POST['email'],$_POST['motpass']));
        $_SESSION['email']=$_POST['email'];
        header("location:client.php");

}

?>