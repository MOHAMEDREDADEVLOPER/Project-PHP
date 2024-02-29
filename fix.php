<?php
require("conexion.php");
session_start();

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
    <title>LOG IN - SHOPX</title>
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
    <nav id="navheader" style="border:2px solid white;border-radius: 25px;">
        <ul id="ulSM" >
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-facebook-circle' ></i> </a></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-twitter' ></i> </a></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-instagram' ></i> </a></i></li>
            <li></li><a href="#" class="scLogo"> <i class='bx bxl-reddit' ></i> </a></i></li>
            <li><h6><p style="font-family: Verdana, Geneva, Tahoma, sans-serif;color: white;font-weight: 600; padding-top: 15px;"><i class='bx bxs-chevron-down-circle' style="font-size: 20px;color: orangered;cursor: pointer;"></i></h6></li>
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
              <a class="nav-link" href="dashboard.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown" id="nv-itemD">
                <a type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="nav-linkDro">
                    <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Uses</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-it"><a class="dropdown-ite" href="Customer.php"><i class='bx bx-child'></i> Customer</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="PersonalSeller.php"><i class='bx bxs-face'></i> Personal Seller</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="CompanyOrContracting.php"><i class='bx bxs-castle'></i> Company Or Contracting</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="DeliveryService.php"><i class='bx bxs-plane-take-off'></i> Delivery Service</a></li>
                  </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="Categories.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Categories</span>
              </a>
            </li>
          </ul>
          <form action="" id="loginSignin">
            <a type="button" id="signIn" name="signIn" title="Go to SignIn" href="signin.php"><i class='bx bx-universal-access' style="font-size: 25px;"></i> SIGN IN</a>
            <!-- <a type="button" id="logIn" name="logIn" title="Go to LogIn" href="login.html"><i class='bx bxs-universal-access' style="font-size: 25px;"></i> LOG IN</a> -->
          </form>
        </div>
      </nav>
<script src="JS/jquery-2.0.2.min.js"></script>
<script>
          $(document).ready(function(){
            $("#navheader").click(function(){
                $("#navbar").slideToggle("slow");
            })
        })
</script>
<section>

  <div class="container" id="containerLogin">
    <br>
    <center>

    <form class="form" style="display: none;" action="fixaction.php" method="post" >
  <div class="title">Welcome to page change password</div>
  <div class="subtitle">fix your account!</div>
  <div id="errorMessage">
    <?php if (isset($_GET['msg'])) { ?>
      <p><?php echo $_GET['msg']; ?></p>
    <?php } ?>
  </div>
  <p><a href="login.php">back to page login</a></p>
  <div class="input-container ic1">
    <input id="firstname"class="input" type="email" placeholder=" " name="email" required />
    <div class="cut"></div>
    <label for="firstname" class="placeholder">Email</label>
  </div>
  <div class="input-container ic2">
    <input id="password" class="input" type="password" placeholder=" " name="motpass" required  />
    <div class="cut cut-short"></div>
    <label for="password" class="placeholder">Password</label>
  </div>
  <button type="submit" class="submitLoginn" name="change" id="login">Change</button>
  <br>
</form>

<!-- <script>
  function validateLoginForm() {
    var emailInput = document.getElementById('email');
    var passwordInput = document.getElementById('password');
    var errorMessage = document.getElementById('errorMessage');

    
    errorMessage.innerHTML = '';

    // Validate email
    var email = emailInput.value.trim();
    if (email === '') {
      displayError(errorMessage, 'Email is required');
      emailInput.focus();
      return false;
    } else if (!isValidEmail(email)) {
      displayError(errorMessage, 'Invalid email address');
      emailInput.focus();
      return false;
    }

    // Validate password
    var password = passwordInput.value.trim();
    if (password === '') {
      displayError(errorMessage, 'Password is required');
      passwordInput.focus();
      return false;
    }

    return true;
  }

  function displayError(element, message) {
    element.innerHTML = '<p style="color: red;">' + message + '</p>';
  }

  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
</script> -->

    </section> 
        <br>

        <script src="JS/jquery-2.0.2.min.js"></script>
        <script>
                
        $(document).ready(function(){
          $('.form').show(2000);
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