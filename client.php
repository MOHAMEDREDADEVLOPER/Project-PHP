<?php
require "conexion.php";
session_start();
$email=$_SESSION['email'];
$afficher=$con->prepare("SELECT * FROM client WHERE email=?");
$afficher->execute(array($email));
$row=$afficher->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="shopx-SHOP, shopx, shop shopx, xshop">
    <meta name="description" content="Parcourez et découvrez des millions de produits. Lisez les avis des clients et
     trouvez les meilleurs vendeurs. Nous expédions vers plus de 100 destinations internationales,
      directement à votre porte.">
    <meta name="author" content="Youssef TALIBI, Mohammed reda HACHOM">
    <title>SHOPX - CLIENT</title>
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


    <style>
      /* @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap'); */


      .slideshow {
    width: 78%;
    height: 300px;
    background-color: black;
    /* margin: 20px auto; */
    position: relative;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.4);
    border-radius: 14px;
    margin: auto;
    box-shadow: 0 0 80px rgb(255, 136, 0);
    border:2px solid rgb(255, 123, 0);
}


.slides-box .slide img {
    display: table;
    background-size: cover;
    width: fit-content;
}

.slideshow-buttons {
    color: black;
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
}

.slideshow-buttons div {
    color: white;
    display: inline-block;
    font-size: 2em;
    /* padding: 10px; */
    cursor: pointer;
}

.slideshow-buttons .next-btn {
    margin-left: 4%;
    transition: all ease-in-out 0.3s;
    text-shadow: 1px 1px 2px black;
}

.slideshow-buttons .next-btn:hover {
    transform: translateX(4px);
}

.slideshow-buttons .prev-btn {
    transition: all ease-in-out 0.3s;
    text-shadow: 1px 1px 2px black;
}

.slideshow-buttons .prev-btn:hover {
    transform: translateX(-4px);
}


.btn_Categoris1{
    color:white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 600;
    background: linear-gradient(90deg, rgb(255, 111, 0), rgb(255, 157, 0));
    font-size: 15px;
    padding: 5px;
    display: flex;
    align-items: center;
    width: fit-content;
    border-radius: 20px;
    border: 2px solid #121377;
    transition: 0.2s transform;
    cursor: pointer;
}
.btn_Categoris1:hover{
    transform: scale(1.1);
    box-shadow:  0 0 100px rgb(255, 102, 0);
}
.btn_Categoris2{
    color:white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 600;
    background: linear-gradient(90deg, rgb(0, 38, 152), rgb(0, 106, 255));
    font-size: 15px;
    padding: 5px;
    display: flex;
    align-items: center;
    width: fit-content;
    border-radius: 20px;
    border: 2px solid #121377;
    cursor: pointer;
    transition: transform 0.2s;
}
.btn_Categoris2:hover{
    transform: scale(1.1);
    box-shadow:  0 0 100px rgb(0, 145, 255);
}
.vehicles, .classfieds, .hobbies, .Electronic, .family, .clothes, .entertainment, .House{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 5px;
    display: none;
}
.categories{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 5px;
}
.cardProduit {
      width: 200px;
      border: 2px solid rgb(255, 102, 0);
      border-radius: 20px;
      padding: 5px;
      background-color: white;
      height:450px;
    }

    .cardImg {
      width: 100%;
      height:220px;
      overflow: hidden;
      box-shadow: 0 0 100px rgb(255, 255, 255);
    }

    .badge {
      position: relative;
      top: 13px;
      left: 140px;
      color: rgb(255, 115, 0);
      background-color: rgb(255, 255, 255);
      box-shadow: 0 0 20px white;
    }

    .titleProduit {
      text-align: center;
    }

    .Price {
      text-align: center;
    }

    .description {
      width: 90%;
      overflow: hidden;
      height: 25px;
    }

    .buy {
      text-align: center;
    }
    #aff_Produit{
      display:grid;
      place-items:center;
    }
    </style>
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
        <a class="navbar-brand" href="index.html"><img src="IMAGES/loogoLjadid-removebg-preview.png" alt="navbarBrand" id="brand" style="width: 90px;padding:0;margin: 0;"></a>
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
            <a type="button" id="parametre" name="parametre" title="Go to parametre" href="panier.php"><i class='bx bxs-cog' style="font-size: 25px;"></i>panier</a>
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
<section id="sessionClient">
        <br>

        <div class="slideshow">
      
          <div class="slides-box">
      
      
          <div class="slide">
              <img src="./IMAGES/cover1.jpg" alt="image" title="image">
            </div>
      
            <div class="slide">
              <img src="./IMAGES/cover2.jpg" alt="image" title="image">
            </div>
      
            <div class="slide">
              <img src="./IMAGES/cover3.jpg" alt="image" title="image">
            </div>
      
            <div class="slide">
              <img src="./IMAGES/cover5.jpg" alt="image" title="image">
            </div>
      
          </div>
      
          <div class="slideshow-buttons">
      
            <div class="prev-btn">&larr;</div>
            <div class="next-btn">&rarr;</div>
      
          </div>
      
        </div>

      
        <script src="JS/jquery-2.0.2.min.js"></script>
        <script src="JS/slideshow.js"></script>
      
        <script>
      
          $(document).ready(function () {
      
            $('.slideshow').slideshowPlugin({
              // Parameters
              effect: 'sliding',
              slideSpeed: 800,
              ratio: "keep",
            });
      
          });
        </script>


          <br>
          <div class="container">
          <div class="welcome" style="display: flex; align-items: center; gap:15px;">
            <img src="IMAGES/personProdilman.png" alt="" width=50px>
            <h1 style="color:white; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 700; font-size: 20px;text-shadow:0 0 10px orange;">Hello, <?php echo $row['username']; ?>
            <p style="color:rgb(255, 102, 0); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 600; font-size: 11px; padding: 0; margin: 0;">Cheri li bghiti m3a shopX</p>
            </h1>
          </div>
          </div>
          <br>
          <br>

          <div class="container">
  <h3 class="title categorie">Categorie</h3>
  <div class="categories">

    <span class='btn_Categoris1' id="house"><i class='bx bxs-building-house'></i> House and Gardens</span>
    <div class="House">
      <button class='btn_Categoris2'>tools</button>
      <button class='btn_Categoris2'>furniture</button>
      <button class='btn_Categoris2'>houseware</button>
      <button class='btn_Categoris2'>gardens</button>
      <button class='btn_Categoris2'>appliances</button>
    </div>

    
    <span class='btn_Categoris1' id="entr"><i class='bx bxs-party'></i> entertainment</span>
    <div class="entertainment">
      <button class='btn_Categoris2'>video games</button>
      <button class='btn_Categoris2'>books, movies and music</button>

    </div>

    <span class='btn_Categoris1' id="clothes"><i class='bx bx-body'></i> clothes and accessories</span>
    <div class="clothes">
      <button class='btn_Categoris2'>bags and luggage</button>
      <button class='btn_Categoris2'>women's clothing and shoes</button>
      <button class='btn_Categoris2'>men's clothing and shoes</button>
      <button class='btn_Categoris2'>jewelry and accessories</button>
    </div>

    <span class='btn_Categoris1' id="family"><i class='bx bx-male-female'></i> family</span>
    <div class="family">
      <button class='btn_Categoris2'>health and beauty</button>
      <button class='btn_Categoris2'>pet supplies</button>
      <button class='btn_Categoris2'>infants and children</button>
    </div>

    <span class='btn_Categoris1' id="electro"><i class='bx bx-selection'></i>Electronic Devices</span>
    <div class="Electronic">
      <button class='btn_Categoris2'>Electronic devices and computers</button>
      <button class='btn_Categoris2'>mobile phones</button>
    </div>

    <span class='btn_Categoris1' id="hobbies"><i class='bx bx-street-view'></i>hobbies</span>
    <div class="hobbies">
      <button class='btn_Categoris2'>bikes</button>
      <button class='btn_Categoris2'>arts and crafts</button>
      <button class='btn_Categoris2'>sports and outdoor activities</button>
      <button class='btn_Categoris2'>car parts</button>
      <button class='btn_Categoris2'>musical instruments</button>
      <button class='btn_Categoris2'>antiques and collectibles</button>
    </div>

    <span class='btn_Categoris1' id="classfieds"><i class='bx bxs-doughnut-chart'></i>classfieds</span>
    <div class="classfieds">
      <button class='btn_Categoris2'>selling used items</button>
      <button class='btn_Categoris2'>diverse</button>
    </div>

    <span class='btn_Categoris1' id="vehicles"><i class='bx bxs-car'></i>vehicles</span>
    <div class="vehicles">
      <button class='btn_Categoris2'>ْX</button>
    </div>
  </div>
</div>
<!-- <script src="JS/jquery-2.0.2.min.js"></script> -->
<script>
  $(document).ready(function(){
    $('#house').click(function(){
      $('.House').css('display','flex');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#entr').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','flex');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#clothes').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','flex');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#family').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','flex');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#electro').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','flex');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#hobbies').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','flex');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','none');
    });
    $('#classfieds').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','flex');
      $('.vehicles').css('display','none');
    });
    $('#vehicles').click(function(){
      $('.House').css('display','none');
      $('.entertainment').css('display','none');
      $('.clothes').css('display','none');
      $('.family').css('display','none');
      $('.Electronic').css('display','none');
      $('.hobbies').css('display','none');
      $('.classfieds').css('display','none');
      $('.vehicles').css('display','flex');
    });


  })
</script>
<br>


<div class="container">
<?php
    $fetchProduits = $con->prepare("SELECT * FROM produit");
    $fetchProduits->execute();
    $produits = $fetchProduits->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <div class="row justify-content-center">
    <div class="col-12">
      <div class="row row-cols-2 row-cols-md-4">
        <?php 
          foreach ($produits as $produit) {
            $_SESSION['id_produit']=$produit['id_produit'];
        ?>

        <div class="col mb-4">
          <div class="cardProduit">
            <div class="cardImg">
              <span class="badge"><?php echo $produit['promo']; ?>%</span>
              <img src="ImagesProduit/<?php echo $produit['photo1']; ?>" alt="" style="width:100%;background-size: cover;border-radius: 20px;margin-top: -20px;">
            </div>
            <div class="titleProduit">
              <h5 style="color:rgb(255, 77, 0);font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;"><?php echo $produit['titre']; ?></h5>
            </div>
            <div class="Price">
              <h4 style="color:rgb(255, 111, 0);font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;"><?php echo $produit['prix']; ?>$</h4>
            </div>
            <div class="description">
              <p style="color:rgb(122, 122, 122);font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 500;font-size: 15px;text-align:center;"><?php echo $produit['description']; ?></p>
            </div>
            <div class="description">
              <p style="color:rgb(255, 200, 0);font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 500;font-size: 15px;text-align:center;">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                  <i class='bx bxs-star'></i>
                <?php } ?>
              </p>
            </div>
            <div class="description">
              <p style='color:grey;font-size:15px;text-align:center; font_family:verdana;'> Quantite : <?php echo $produit['quantite']; ?></p>
            </div>
            <br>
            <div class="buy text-center">
               <a href="paye.php" id="but" style="width: 70%;background: linear-gradient(90deg, rgb(255, 77, 0), rgb(255, 166, 0));color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;border-radius: 20px;border: none;outline: none;padding: 5px;box-shadow: 0 0 10px rgb(255, 102, 0);cursor:pointer;">BUY</a>
               <a href="panier.php" id="but" style="width: 50%;background: linear-gradient(111deg, rgba(0,125,255,1) 0%, rgba(0,82,153,1) 50%, rgba(0,0,0,1) 100%);color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: 700;border-radius: 20px;border: none;outline: none;padding: 5px;box-shadow: 0 0 10px rgb(255, 102, 0);cursor:pointer;">a panier</a>
            </div> 
          </div>
        </div>

        <?php    
          }
        ?>
      </div>
    </div>
  </div>
</div>
<br><br><br>






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
          <form class="form-outline form-white mb-4" method="post" action="emaildescription.php">
            <input type="text"  class="form-control" id="emailEn">
            <label class="form-label" for="form5Example21">Email address</label>
          </form>
        </div>


        <div class="col-auto">
          <!-- Submit button -->
          <button type="submit" class="btn btn-outline-light mb-4" id="subscribe" name="sentemail">
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
        <h5 class="text-uppercase">SOCIETE  </h5>

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