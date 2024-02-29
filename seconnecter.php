<?php
session_start();
require("conexion.php");

if (empty($_POST['email']) || empty($_POST['motpass'])) {
    header("location: login.php?msg=les champs sont obligatoires!");
} else {
    $email = $_POST['email'];
    $motpass = $_POST['motpass'];

    $re = $con->prepare("SELECT * FROM client WHERE email=? AND motpass=?");
    $re->execute([$email, $motpass]);
    $donne = $re->fetch();

    if ($donne) {
        $_SESSION['email'] = $email;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            setcookie('email', $email, time() + (7 * 24 * 60 * 60)); 
            setcookie('motpass', $password, time() + (7 * 24 * 60 * 60));
          }
        header("location: client.php");
        exit;
    }

    $re1 = $con->prepare("SELECT * FROM vendeur WHERE email=? AND motpass=?");
    $re1->execute([$email, $motpass]);
    $donne1 = $re1->fetch();

    if ($donne1) {
        $_SESSION['email'] = $email;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            setcookie('email', $email, time() + (7 * 24 * 60 * 60)); //talibi hd cookies d 7 day zid labghiti
            setcookie('motpass', $password, time() + (7 * 24 * 60 * 60));
          }
        header("location: vendeur.php");
        exit;
    }

    header("location: login.php?msg=l'utilisateur est introuvable!!");
    exit();
}
?>

