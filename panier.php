<?php
require("conexion.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="IMAGES/loogoLjadid-removebg-preview.png" type="image/x-icon" style="border-radius: 50%;">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="JS/bootstrap.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>paniert</title>
</head>
<body>
<?php
if(isset($_SESSION['email']) && isset($_SESSION['id_produit'])){
    $email = $_SESSION['email'];
    $idproduit =$_SESSION['id_produit'];

    $ajoute= $con->prepare("INSERT INTO `comand`( `email`, `id_produit`) VALUES (?,?)");
    $ajoute->execute(array($email,$idproduit));

    $affi=$con->prepare("SELECT * FROM produit INNER join comand on comand.id_produit=produit.id_produit WHERE email=?");
    $affi->execute(array($email));

}
?>
<button class="btn btn_primary"><a href="client.php">Retourner à la page client</a></button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numéro commande</th>
            <th scope="col">Photos</th>
            <th scope="col">Prix</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php while($row=$affi->fetch()) {?>
        <tr>
            <td><?php  echo $row['num_comand'] ?></td>
            <td><img src="ImagesProduit/<?php echo $row['photo1']?>" alt=""></td>
            <td><?php echo $row['prix']?></td>
            <td><button type="button" class="btn btn-danger"><a href="deletecomand.php?numcomand=<?php echo $row['num_comand']?>" class="fg-danger">Supprimer</a></button></td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td>Total</td>
            <td></td>
            <td><button type="button" class="btn btn-warning"><a href="paye.php">Payer</a></button></td>
        </tr>
    </tfoot>
</table>
</body>
</html>