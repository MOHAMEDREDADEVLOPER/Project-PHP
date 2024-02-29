<?php
require("conexion.php");
session_start();
if ( isset ($_SESSION['email']) ) {
$email=$_SESSION['email'];
$afficher=$con->prepare("SELECT * FROM vendeur WHERE email=?");
$afficher->execute(array($email));
$row=$afficher->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=shopx-SHOP, shopx, shop shopx, xshop">
    <meta name="description" content="Parcourez et découvrez des millions de produits. Lisez les avis des clients et
     trouvez les meilleurs vendeurs. Nous expédions vers plus de 100 destinations internationales,
      directement à votre porte.">
    <meta name="author" content="Youssef TALIBI, Mohammed reda HACHOM">
    <title>SHOPX - VENDEUR</title>
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
</head>
<body>
    <nav id="navheader">
        <ul id="ulSM">
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-facebook-circle' ></i> </a></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-twitter' ></i> </a></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-instagram' ></i> </a></i></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-reddit' ></i> </a></i></li>
            <li><h6><p style="font-family: Verdana, Geneva, Tahoma, sans-serif;color: white;font-weight: 600; padding-top: 15px;"><i class='bx bxs-chevron-down-circle' style="font-size: 20px;color: rgb(255, 255, 255);cursor: pointer;"></i></h6></li>
            </ul>
            <span>
                <i>&#128509</i> 
                <select name="lang" id="lang">
                    <option value="arabic" id="arabic" class="optionLang">Arabic</option>
                    <option value="english" id="english" selected class="optionLang"> English</option>
                    <option value="french" id="french" class="optionLang">french</option>
                    <option value="spain" id="spain" class="optionLang">Spain</option>
                </select>
            </span>
    </nav>




    <nav class="navbar navbar-expand-lg navbar-light " id="navbar" style="display: none;">
        <a class="navbar-brand" href="index.php"><img src="IMAGES/loogoLjadid-removebg-preview.png" alt="navbarBrand" id="brand" style="width: 90px;padding:0;margin: 0;"></a>
        <!-- <button class="navbar-toggler" type="button" id="btnBurger" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
            <button class="navbar-toggler" type="button" id="btnBurger" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <!-- <span class="navbar-toggler-icon"></span> -->
          <!-- <i class='bx bx-align-justify' ></i> -->
          <i class='bx bx-chevrons-down' id="iconBurger"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Home</span>
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="Categories.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Categories</span>
              </a>
            </li>
          </ul>
          <form action="" id="loginSignin">
            <a type="button" id="parametre" name="parametre" title="Go to parametre" href="#"><i class='bx bxs-cog' style="font-size: 25px;"></i>PARAMETERE</a>
            <a type="button" id="deconnexion" name="deconnexion" title="Deconnecter" href="deconnexion.php"><i class='bx bxs-log-out-circle' style="font-size: 25px;"></i>DECONNECTER</a>
          </form>
        </div>
      </nav>
      <script src="JS/jquery-2.0.2.min.js"></script>
<script>
          $(document).ready(function(){
            $("#navheader").click(function(){
                $("#navbar").slideToggle("slow");
            });
        })
</script>
      <section id="sessionVendeur">
        <br>
        <div class="container">
            <div class="row">
                <div class="col" style='display:flex;'>
                <div class="imgCardvendeur" style='width:60px;overflow: hidden;border-radius:50%;box-shadow:0 0 10px white;'><img src="vendeurlogo/<?php echo $row['logo'] ;?>" alt="" style='width:100%;'></div>
                    <h3 id="titleVendeur" style='padding:10px;'>Hello,  <?php echo $row['nomcomplete'];       ?> </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <br>
                    <h2 id="titleVendeur" style="color: rgb(255, 106, 0);">This is Your Tools for Management Your Store : </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-lg-4 col-sm-12 divsTools">
                    <button class="btnToolsVendeur" id="btnToolsVendeur1"><i class='bx bxs-add-to-queue' id="iLogoVendeurTools1"></i><br><span class="titleTools">Add Product</span></button>
                </div>
                <div class="col-lg-4 col-sm-12 divsTools">
                    <button class="btnToolsVendeur" id="btnToolsVendeur2"><i class='bx bxs-objects-vertical-bottom' id="iLogoVendeurTools2"></i><br><span class="titleTools">Statistics</span></button>
                </div>
                <div class="col-lg-4 col-sm-12 divsTools">
                    <button class="btnToolsVendeur" id="btnToolsVendeur3"><i class='bx bxs-show' id="iLogoVendeurTools3"></i><br><span class="titleTools">Show Products</span></button>
                </div>
            </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-lg-4 col-sm-12 divsTools">
                        <button class="btnToolsVendeur" id="btnToolsVendeur4"><i class='bx bxs-edit-alt' id="iLogoVendeurTools4"></i><br><span class="titleTools">Update Product</span></button>
                    </div>
                    <div class="col-lg-4 col-sm-12 divsTools">
                        <button class="btnToolsVendeur" id="btnToolsVendeur5"><i class='bx bx-cart-download' id="iLogoVendeurTools5"></i><br><span class="titleTools">Last Buys</span></button>
                    </div>
                    <div class="col-lg-4 col-sm-12 divsTools">
                        <button class="btnToolsVendeur" id="btnToolsVendeur6"><i class='bx bx-money' id="iLogoVendeurTools6"></i><br><span class="titleTools">Wallet</span></button>
                    </div>
                </div>
        </div>

        <script src="JS/jquery-2.0.2.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#btnToolsVendeur1').click(function(){
                   $('.addProduct').show(1000); 
                   $('.UpdateProduct').hide(1000); 
                   $('#tableProduit').hide(1000);
                   $('#walletBox').hide(1000); 
                })
                $('#btnToolsVendeur4').click(function(){
                    $('.UpdateProduct').show(1000); 
                    $('.addProduct').hide(1000); 
                    $('#tableProduit').hide(1000);
                    $('#walletBox').hide(1000); 
                })
            })
        </script>

        <br>

        <div class="addProduct" style="display: none;">
            <div class="container">
                <center>
                    <form action="ajouterProduit.php" class="formAddProduct" method='post' enctype='multipart/form-data'>
                    <table class="table w-75" id="tableAddProduct">
                        <thead>
                            <tr>
                                <th colspan="2" ><h1 class="titleProductAdd">Add Your New Product</h1></th>
                            </tr>
                        </thead>

                    <tr>
                        <td><label for="titre">Titre </label></td>
                        <td><input type="text" name="titre" id="titre" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="description">Description</label></td>
                        <td><textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="quantite">Quantite</label></td>
                        <td><input type="text" name="quantite" id="quantite" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="prix">Prix</label></td>
                        <td><input type="text" name="prix" id="prix" step="0.01" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="promo">Promo</label></td>
                        <td><input type="number" name="promo" id="promo" min="0" max="99" step="1" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="categorie">Categorie</label></td>
                        <td><select name="categorie" id="categorie" class="form-control">
                            <option value="House And Gardens"  class="optionCategorie">House And Gardens</option>
                            <option value="Entertainment" class="optionCategorie">Entertainment</option>
                            <option value="Clothes and Accessories" class="optionCategorie">Clothes and Accessories</option>
                            <option value="Family" class="optionCategorie">Family</option>
                            <option value="Electronic Devices" class="optionCategorie">Electronic Devices</option>
                            <option value="Hobbies" class="optionCategorie">Hobbies</option>
                            <option value="ClassFields" class="optionCategorie">ClassFields</option>
                            <option value="Vehilces" class="optionCategorie">Vehilces</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image1</label></td>
                        <td><input type="file" name="image1" id="image1" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image2</label></td>
                        <td><input type="file" name="image2" id="image2" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image3</label></td>
                        <td><input type="file" name="image3" id="image3" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btnAddProuct" id="btnAddProuct" class="btn w-100" value='Ajoute'></td>
                    </tr>
                </table>
            </form>
            </center>
            </div>
        </div>
        <div class="UpdateProduct" style="display: none;">
            <div class="container">
                <center>
                    <form action="UpdateProduit.php" class="formUpdateProduct" method='post'>
                    <table class="table w-75" id="tableUpdateProduct">
                        <thead>
                            <tr>
                                <th colspan="2" ><h1 class="titleProductUpdate">Update Your Product</h1></th>
                            </tr>
                        </thead>
                        <tr>
                        <td><label for="idProduit">ID-PRODUIT </label></td>
                        <td><input type="text" name="idProduitUpdate" id="idProduit" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="titre">Titre </label></td>
                        <td><input type="text" name="titreUpdate" id="titre" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="description">Description</label></td>
                        <td><textarea name="descriptionUpdate" id="description" cols="30" rows="10" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="quantite">Quantite</label></td>
                        <td><input type="text" name="quantiteUpdate" id="quantite" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="prix">Prix</label></td>
                        <td><input type="text" name="prixUpdate" id="prix" step="0.01" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="promo">Promo</label></td>
                        <td><input type="number" name="promoUpdate" id="promo" min="0" max="99" step="1" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="categorie">Categorie</label></td>
                        <td><select name="categorieUpdate" id="categorie" class="form-control">
                            <option value="House And Gardens" class="optionCategorie">House And Gardens</option>
                            <option value="Entertainment" class="optionCategorie">Entertainment</option>
                            <option value="Clothes and Accessories" class="optionCategorie">Clothes and Accessories</option>
                            <option value="Family" class="optionCategorie">Family</option>
                            <option value="Electronic Devices" class="optionCategorie">Electronic Devices</option>
                            <option value="Hobbies" class="optionCategorie">Hobbies</option>
                            <option value="ClassFields" class="optionCategorie">ClassFields</option>
                            <option value="Vehilces" class="optionCategorie">Vehilces</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image1</label></td>
                        <td><input type="file" name="image1Update" id="image1" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image2</label></td>
                        <td><input type="file" name="image2Update" id="image2" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="image1">image3</label></td>
                        <td><input type="file" name="image3Update" id="image3" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btnProuctUpdate" id="btnProuctUpdate" class="btn w-100"></td>
                    </tr>
                </table>
            </form>
            </center>
            </div>
        </div>

        <br>

        <?php

        $afficheProduit = $con->prepare('SELECT * FROM produit where id_produit in (SELECT id_produit FROM vendre WHERE id_vendeur=?)');
        $afficheProduit->execute(array($row['id_vendeur']));
          
        echo "<div class='container'><center><table class='table table-bordered w-75' id='tableProduit' style='display:none;'> ";
        echo "<thead>";
        echo "<th>ID-PRODUIT</th>";
        echo "<th>TITRE</th>";
        echo "<th>DESCRIPTION</th>";
        echo "<th>QUANTITE</th>";
        echo "<th>PRIX</th>";
        echo "<th>IMAGE1</th>";
        echo "<th>IMAGE2</th>";
        echo "<th>IMAGE3</th>";
        echo "<th>PROMO</th>";
        echo "<th>CATEGORIE</th>";
        echo "<th colspan='1'>ACTIONS</th>";
        echo "</thead>";
        while($rowProduit = $afficheProduit->fetch()){
          echo "<tr>";
          echo "<td>".$rowProduit['id_produit']."</td>";
          echo "<td>".$rowProduit['titre']."</td>";
          echo "<td style='width:50px;'><p style='font-size:10px;width:50px;'>".$rowProduit['description']."</p></td>";
          echo "<td>".$rowProduit['quantite']."</td>";
          echo "<td>".$rowProduit['prix']."</td>";
          echo "<td><div class='cardImgTaille'><img src=ImagesProduit/".$rowProduit['photo1']." width='100%'></div></td>";
          echo "<td><div class='cardImgTaille'><img src=ImagesProduit/".$rowProduit['photo2']." width='100%'></div></td>";
          echo "<td><div class='cardImgTaille'><img src=ImagesProduit/".$rowProduit['photo3']." width='100%'></div></td>";
          echo "<td>".$rowProduit['promo']." % </td>";
          echo "<td>".$rowProduit['categorie']."</td>";
          $_SESSION['idProduitSupp'] = $rowProduit['id_produit'];
          echo "<td><form onclick=\"return confirm('Êtes-vous sûr(e) ?')\" action='supprimeProduit.php' method='post'>
      <input type='hidden' name='id_produit' value='" . $rowProduit['id_produit'] . "'>
      <button type='submit' name='delete' class='btn btn-danger'>Supprimer</button>
      </form></td>";

          // echo "<td><form".onclick="return confirm('Êtes-vous sûr(e) ?')"."action='supprimeProduit.php' method='post'><input type='hidden' name='id_produit' value='" . $rowProduit['id_produit'] . "'><button type='submit' name='delete' class='btn btn-danger'>Supprime</button></formaction=></td>";
          // echo "<td><form><a href='supprimeProduit.php?id_produit=".$_SESSION['idProduitSupp']."' class='btn btn-danger'>Supprime</a></form></td>";
          echo "</tr>";
        }
        echo "</table></center></div> <br>";




        // $afficheWallet = $con->prepare('SELECT * FROM vendeur WHERE id_vendeur=?');
        // $afficheWallet->execute(array($row['id_vendeur']));
        // $wallet =  $afficheWallet->fetch();
        echo "<div class='container' id='walletBox' style='display:none ;'><center><div id='walletCard'><div id='centerWallet'><h4?>Wallet, <span id='nameWallet'>".$row['nomcomplete']."</span></h3><br>Balance :  <span id='balance'>".$row['wallet']."$</span></div></div></center></div>";
?>
        <br><br><br><br><br><br><br><br>
    </section>
<script>
  $(document).ready(function(){
    $('#btnToolsVendeur3').click(function(){
      $('#tableProduit').show(1000);
      $('.UpdateProduct').hide(1000); 
      $('.addProduct').hide(1000); 
      $('#walletBox').hide(1000); 
    });
    $('#btnToolsVendeur6').click(function(){
      $('#tableProduit').hide(1000);
      $('.UpdateProduct').hide(1000); 
      $('.addProduct').hide(1000); 
      $('#walletBox').show(1000); 
    });
  })
</script>




    <footer class="bg-dark text-center text-white" style="margin-top: -25px;">

        <div class="container p-4">
          <section class="" style="border-radius: 20px;" class="sectionFooter">
            
            <center>
              <div class="socialMedia" width="100%">
                <br>
                <center>
                  <ul id="UlSocial">
                    <li></li><a href="#" class="scLogo"> <i class='bx bxl-facebook-circle' title="Go to Facebook"></i> </a></li>
                    <li></li><a href="#" class="scLogo"> <i class='bx bxl-twitter' title="Go to Twitter"></i> </a></li>
                    <li></li><a href="#" class="scLogo"> <i class='bx bxl-instagram' title="Go to Instgram"></i> </a></i></li>
                    <li></li><a href="#" class="scLogo"> <i class='bx bxl-reddit' title="Go to reddit"></i> </a></i></li>
                    </ul>
                </center>
                <br>
              </div>
            </center>
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Sign up for our newsletter</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input type="text"  class="form-control" id="emailEn">
                    <label class="form-label" for="form5Example21">Email address</label>
                  </div>
                </div>
    
    
                <div class="col-auto">
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-outline-light mb-4" id="subscribe">
                    Subscribe
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
    
          <br>
    
          <section class="mb-4" style="border-radius: 20px;" class="sectionFooter">
            <br>
            <p>
              Step into a world of petite elegance and embrace a shopping experience curated exclusively for those with refined tastes and smaller frames. shopx Shop proudly presents its exquisite collection of petite fashion, where every detail is meticulously crafted to flatter and enhance your unique proportions.
            </p>
            <br>
          </section>
          <!-- Section: Text -->
      
          <!-- Section: Links -->
          <section class="" style="border-radius: 20px;" class="sectionFooter">
            <!--Grid row-->
            <br><br>
            <div class="row" >
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style>
                <h5 class="text-uppercase">SOCIETE	</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">A propos</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Offres d'emploe</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">For the Record</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Legal</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">COMMUNATES</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">Espace artistes</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Developpeurs</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Camoagnes publicitaires</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Fournisseurs</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">LIEN UTILES</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">Assistance</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Appli mobile gratuit</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Investisseurs</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Protection des donnees</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">	Fournisseurs</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">Center de Confidentialite</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Protection des donnees</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Cookies</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Legal</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
            </div>
            <br><br>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgb(0, 62, 113); color:orange; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 600;">
          © <script>
            var now = new Date();
            document.write(now.getFullYear());
          </script> Copyright by TALIBI & HACHOUM
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    
    
          
    </body>
    </html>


<?php

$_SESSION['id_vendeur']=$row['id_vendeur'];


?>