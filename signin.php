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
    <title>SIGN IN - SHOPX</title>
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
    <script src="signinjs.js"></script>
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
              <a class="nav-link" href="dashboard.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown" id="nv-itemD">
                <a type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="nav-linkDro">
                    <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Uses</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-it"><a class="dropdown-ite" href="Customer.html"><i class='bx bx-child'></i> Customer</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="PersonalSeller.html"><i class='bx bxs-face'></i> Personal Seller</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="CompanyOrContracting.html"><i class='bx bxs-castle'></i> Company Or Contracting</a></li>
                    <li class="dropdown-it"><a class="dropdown-ite" href="DeliveryService.html"><i class='bx bxs-plane-take-off'></i> Delivery Service</a></li>
                  </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="Categories.php">
                <span style="color:rgb(0, 93, 160); font-weight: 600;" class="spanName">Categories</span>
              </a>
            </li>
          </ul>
          <form action="" id="loginSignin">
            <a type="button" id="logIn" name="logIn" title="Go to SignIn" href="login.php"><i class='bx bx-universal-access' style="font-size: 25px;"></i>LOG IN</a>
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
  <br>
  <center>
    <div class="container w-100">
      <div class="shoseSignin">
        <ul>
          <li><button type="button" id="btnClient" class="btnChoses">Client <br><i class='bx bx-child' class="iShoses" style="font-size: 20px;"></i></button></li>
          <li><button type="button" id="btnCommercial" class="btnChoses">Commercial <br><i class='bx bx-money-withdraw' class="iShoses" style="font-size: 20px;"></i></button></li>
          <li><button type="button" id="btnLivreur" class="btnChoses">Livreur <br><i class='bx bxs-package' class="iShoses" style="font-size: 20px;"></i></button></li>
        </ul>
      </div>
    </div>
  </center>
  <script>
              $(document).ready(function(){
            $("#btnClient").click(function(){
                $(".formSignin").show(2000);
                $(".formSigninVendeur").hide(2000);
                $(".formSigninLivreur").hide(2000);
            })
            $("#btnCommercial").click(function(){
                $(".formSigninVendeur").show(2000);
                $(".formSignin").hide(2000);
                $(".formSigninLivreur").hide(2000);
            })
            $("#btnLivreur").click(function(){
                $(".formSigninLivreur").show(2000);
                $(".formSignin").hide(2000);
                $(".formSigninVendeur").hide(2000);
            })
        })
  </script>
  
  <div class="container">
    <center>
<!-- form client -->


    <form action="ajouterclient.php" class="formSignin" style="display: none;" method="post">
      <table class="table border-0 w-50" id="tableSignIn">
        <!-- khdm hd aleret b css -->
        <?php if(isset($_GET['msg'])){?>
          <p style="color:blue;font-size: 24px; margin-top: 5px; "><?php echo $_GET['msg'] ?></p>
          <?php } ?>   
        <tr>
          <td><label for="nomSignin">Nom : </label></td>
          <td><p id="nomSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text"  id="nomSignin" name="nom"></td>
          
        </tr>
        <tr>
          <td><label for="prenomSignin">Prenom : </label></td>
          <td><p id="prenomSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" id="prenomSignin" name="prenom"></td>
        </tr>
        <tr>
          <td><label for="UserSignin">UserName : <span style="color: rgb(0, 72, 135);">(A-Z)5chiffres</span> </label></td>
          <td><p id="UserSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text"  id="UserSignin"  name="username"></td>
        </tr>
        <tr>
          <td><label for="email">Email : </label></td>
          <td><p id="emailSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="email"  id="emailSignin"  name="email"></td>
        </tr>
        <tr>
          <td><label for="dNSignin">Date Naissnce : </label></td>
          <td><p id="prenomSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="date"  id="dNSignin" name="date_naissance"></td>
        </tr>
        <tr>
          <td><label for="GenreSignin">Genre : </label></td>
          <td><input type="radio" name="genre" id="homme" value="homme"  checked><label for="homme" id="hommeLabel">HOMME</label><input type="radio" name="genre" id="famele" value="famele"><label for="famele" id="fameleLabel">FAMELE</label></td>
        </tr>
        <tr>
          <td><label for="villeSignin">ville : </label></td>
          <td><p id="villeSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text"  id="villeSignin" name="ville"></td>
        </tr>
        <tr>
          <td><label for="AdressClientSignIN">Adress : </label></td>
          <td><p id="AdressClientSignINjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text"  id="AdressClientSignIN" name="adress"></td>
        </tr>
        <tr>
          <td><label for="ntSignin">Numero Telephone : </label></td>
          <td><p id="ntSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;" ></p></td>
          <td><input type="text"  id="ntSignin" name="telephone"></td>
        </tr>
        <tr>
          <td><label for="mtSignin">Mot de Pass : </label></td>
          <td><p id="cmtSigninjs1" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="password"  id="mtSignin" name="motpass"></td>
        </tr>
        <tr>
          <td><label for="cmtSignin">Confirm Mot de Pass : </label></td>
          <td><p id="cmtSigninjs2" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="password"  id="cmtSignin"></td>
        </tr>
        <tr>
          <td id="tdcheck"><input type="checkbox"  id="checkboxSignin" class="form-checkbox"></td>
          <td><label for="Check">If you acceppt roles</label></td>
        </tr>
        <tr>
          <td><label for="createCompte">Create You Account</label></td>
          <td><input type="submit" value="Create" name="ajouterclient" id="CreateBtn"></td>
        </tr>
      </table>
    </form>
    <script>
      document.getElementById("CreateBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    clearErrorMessages();

    // Perform form validation
    var isValid = true;

    // Validate Nom
    var nom = document.getElementById("nomSignin").value;
    if (nom === "") {
      displayErrorMessage("nomSigninjs", "Please enter your Nom");
      isValid = false;
    }

    // Validate Prenom
    var prenom = document.getElementById("prenomSignin").value;
    if (prenom === "") {
      displayErrorMessage("prenomSigninjs", "Please enter your Prenom");
      isValid = false;
    }

    // Validate UserName
    var username = document.getElementById("UserSignin").value;
    if (username === "") {
      displayErrorMessage("UserSigninjs", "Please enter your UserName");
        isValid = false;
    } else if (!/^[A-Z]{5}$/.test(username)) {
       displayErrorMessage("UserSigninjs", "UserName should be 5 uppercase letters (A-Z)");
      isValid = false;
}

    // Validate Email
    var email = document.getElementById("emailSignin").value;
if (email === "") {
  displayErrorMessage("emailSigninjs", "Please enter your Email");
  isValid = false;
} else if (!/^[\w.-]+@[a-zA-Z_-]+?\.[a-zA-Z]{2,3}$/.test(email)) {
  displayErrorMessage("emailSigninjs", "Please enter a valid email address");
  isValid = false;
}

    // Validate Date Naissance
    var dateNaissance = document.getElementById("dNSignin").value;
    if (dateNaissance === "") {
      displayErrorMessage("dNSigninjs", "Please enter your Date Naissance");
      isValid = false;
    }

    // Validate Ville
    var ville = document.getElementById("villeSignin").value;
    if (ville === "") {
      displayErrorMessage("villeSigninjs", "Please enter your Ville");
      isValid = false;
    }

    // Validate Adress
    var adress = document.getElementById("AdressClientSignIN").value;
    if (adress === "") {
      displayErrorMessage("AdressClientSignINjs", "Please enter your Adress");
      isValid = false;
    }

    // Validate Numero Telephone
    var telephone = document.getElementById("ntSignin").value;
if (telephone === "") {
  displayErrorMessage("ntSigninjs", "Please enter your Numero Telephone");
  isValid = false;
} else if (!/^\d{10}$/.test(telephone)) {
  displayErrorMessage("ntSigninjs", "Please enter a valid 10-digit phone number");
  isValid = false;
}

    // Validate Mot de Pass
    var password = document.getElementById("mtSignin").value;
if (password === "") {
  displayErrorMessage("cmtSigninjs1", "Please enter your Mot de Pass");
  isValid = false;
} else if (password.length < 6) {
  displayErrorMessage("cmtSigninjs1", "Password should be at least 6 characters long");
  isValid = false;
}

    // Validate Confirm Mot de Pass
    var confirmPassword = document.getElementById("cmtSignin").value;
    if (confirmPassword === "") {
      displayErrorMessage("cmtSigninjs2", "Please confirm your Mot de Pass");
      isValid = false;
    } else if (confirmPassword !== password) {
      displayErrorMessage("cmtSigninjs2", "Passwords do not match");
      isValid = false;
    }

    // Validate Checkbox
    var checkbox = document.getElementById("checkboxSignin").checked;
    if (!checkbox) {
      displayErrorMessage("tdcheck", "Please accept the roles");
      isValid = false;
    }

    // If form is valid, submit the form
    if (isValid) {
      document.getElementById("tableSignIn").submit();
    }
  });

  function displayErrorMessage(elementId, message) {
    var errorMessageElement = document.getElementById(elementId);
    errorMessageElement.textContent = message;
  }

  function clearErrorMessages() {
    var errorElements = document.querySelectorAll("p[id$='js']");
    for (var i = 0; i < errorElements.length; i++) {
      errorElements[i].textContent = "";
    }
  }
    </script>
  </center>


    <center>


<!-- form vendeur -->



    <form action="ajoutervendeur.php" class="formSigninVendeur" style="display: none;" method="post" enctype="multipart/form-data">
      <table class="table border-0 w-50" id="tableSignInvendeur">
      <?php  if(isset($_GET['msg1'])){  ?>
         
        <p>  <?php echo $_GET['msg1'] ?>  </p>
          <?php } ?>
        <tr>
          <td><label for="nomComplete">Nom Complete :  </label></td>
          <td><p id="nomCompletejs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" name="nomcomplete" id="nomComplete"></td>
        </tr>
        <tr>
          <td><label for="idVendeurSignin">type Vendeur :  </label></td>
          <td><input type="radio" name="type" id="personne" value="personne" checked><label for="homme" id="personne">personne</label><input type="radio" name="type" id="entreprise" value="entreprise"><label for="famele" id="entreprise">entreprise</label></td>
        </tr>
        <tr>
          <td><label for="email">Email : </label></td>
          <td><p id="emailjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="email" name="email" id="email" ></td>
        </tr>
        <tr>
          <td><label for="dNSigninvendeur">Date Naissnce : </label></td>
          <td><p id="dNSigninvendeurjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="date"  id="dNSigninvendeur" name="datenaissance"></td>
        </tr>
        <tr>
          <td><label for="villeSigninvendeur">ville : </label></td>
          <td><p id="villeSigninvendeurjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" name="ville" id="villeSigninvendeur"></td>
        </tr>
        <tr>
          <td><label for="AdressSignINvendeur">Adress : </label></td>
          <td><p id="AdressSignINvendeurjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text"  id="AdressSignINvendeur" name="adress"></td>
        </tr>
        <tr>
          <td><label for="AdressClientSignIN">logo: </label></td>
          <td><input type="file"  id="AdressClientSignIN" name="logo"></td>
        </tr>
        <tr>
          <td><label for="ntSigninvendeur">Numero Telephone  : </label></td>
          <td><p id="ntSigninvendeurjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" name="telephone" id="ntSigninvendeur"></td>
        </tr>
        <tr>
          <td><label for="mtSigninvendeur">Mot de Pass : </label></td>
          <td><p id="mtSigninvendeurmtSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="password" name="motpass" id="mtSigninvendeur"></td>
        </tr>
        <tr>
          <td id="tdcheck"><input type="checkbox"  id="checkboxVendeurSignin" class="form-checkbox"></td>
          <td><label for="checkboxVendeurSignin">If you acceppt roles !!</label></td>
        </tr>
        <tr>
          <td><label for="CreateVendeurBtn">Create You Account</label></td>
          <td><input type="submit" value="Create" name="CreateVendeurBtn" id="CreateVendeurBtn"></td>
        </tr>
      </table>
    </form>
    <script>
      document.getElementById("CreateVendeurBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    clearErrorMessages();

    // Perform form validation
    var isValid = true;

    // Validate Nom
    var nom = document.getElementById("nomComplete").value;
    if (nom === "") {
      displayErrorMessage("nomCompletejs", "Please enter your Nom complete");
      isValid = false;
    }


    // Validate Email
    var email = document.getElementById("email").value;
if (email === "") {
  displayErrorMessage("emailjs", "Please enter your Email");
  isValid = false;
} else if (!/^[\w.-]+@[a-zA-Z_-]+?\.[a-zA-Z]{2,3}$/.test(email)) {
  displayErrorMessage("emailjs", "Please enter a valid email address");
  isValid = false;
}

    // Validate Date Naissance
    var dateNaissance = document.getElementById("dNSigninvendeur").value;
    if (dateNaissance === "") {
      displayErrorMessage("dNSigninvendeurjs", "Please enter your Date Naissance");
      isValid = false;
    }

    // Validate Ville
    var ville = document.getElementById("villeSigninvendeur").value;
    if (ville === "") {
      displayErrorMessage("villeSigninvendeurjs", "Please enter your Ville");
      isValid = false;
    }

    // Validate Adress
    var adress = document.getElementById("AdressSignINvendeur").value;
    if (adress === "") {
      displayErrorMessage("AdressSignINvendeurjs", "Please enter your Adress");
      isValid = false;
    }

    // Validate Numero Telephone
    var telephone = document.getElementById("ntSigninvendeur").value;
if (telephone === "") {
  displayErrorMessage("ntSigninvendeurjs", "Please enter your Numero Telephone");
  isValid = false;
} else if (!/^\d{10}$/.test(telephone)) {
  displayErrorMessage("ntSigninvendeurjs", "Please enter a valid 10-digit phone number");
  isValid = false;
}

    // Validate Mot de Pass
    var password = document.getElementById("mtSigninvendeur").value;
if (password === "") {
  displayErrorMessage("mtSigninvendeurjs", "Please enter your Mot de Pass");
  isValid = false;
} else if (password.length < 6) {
  displayErrorMessage("mtSigninvendeur", "Password should be at least 6 characters long");
  isValid = false;
}

    

    // Validate Checkbox
    var checkbox = document.getElementById("checkboxSignin").checked;
    if (!checkbox) {
      displayErrorMessage("tdcheck", "Please accept the roles");
      isValid = false;
    }

    // If form is valid, submit the form
    if (isValid) {
      document.getElementById("tableSignInvendeur").submit();
    }
  });

  function displayErrorMessage(elementId, message) {
    var errorMessageElement = document.getElementById(elementId);
    errorMessageElement.textContent = message;
  }

  function clearErrorMessages() {
    var errorElements = document.querySelectorAll("p[id$='js']");
    for (var i = 0; i < errorElements.length; i++) {
      errorElements[i].textContent = "";
    }
  }

    </script>
 
    
  </center>


    <center>

    <form action="" class="formSigninLivreur" style="display: none;">
      <table class="table border-0 w-50" id="tableSignIn">
        <tr>
          <td><label for="nomCompleteLivreurSignin">Nom Complete :  </label></td>
          <td><p id="nomCompleteLivreurSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" name="nomCompleteLivreurSignin" id="nomCompleteLivreurSignin"></td>
        </tr>
        <tr>
          <td><label for="idLivreurSignin">id Vendeur :  </label></td>
          <td><p id="nomCompleteLivreurSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>

          <td><input type="text" name="idLivreurSignin" id="idLivreurSignin"></td>
        </tr>
        <tr>
          <td><label for="cinLivreurSignIn">CIN :  </label></td>
          <td><p id="nomCompleteLivreurSigninjs" style="color:blue;font-size: 20px; margin-top: 5px;"></p></td>
          <td><input type="text" name="cinLivreurSignIn" id="cinLivreurSignIn"></td>
        </tr>
        <tr>
          <td><label for="emailLivreurSignin">Email : </label></td>
          <td><input type="email" name="emailLivreurSignin" id="emailLivreurSignin" required></td>
        </tr>
        <tr>
          <td><label for="villelivreurSignin">ville : </label></td>
          <td><input type="text" name="villelivreurSignin" id="villelivreurSignin"></td>
        </tr>
        <tr>
          <td><label for="ntLivreur1Signin">Numero Telephone : </label></td>
          <td><input type="text" name="ntLivreur1Signin" id="ntLivreur1Signin"></td>
        </tr>
        <tr>
          <td><label for="typeTransport">Type Transport : </label></td>
          <td><input type="text" name="typeTransport" id="typeTransport"></td>
        </tr>
        <tr>
          <td><label for="typeTransport">Type Transport : </label></td>
          <td><select name="typeTransport" id="typeTransport">
            <option value="Motor" class="OptionDeliveryTransportType"><i class='bx bxs-cable-car'></i>Motor</option>
            <option value="Voiture" class="OptionDeliveryTransportType"><i class='bx bxs-car'></i>Voiture</option>
            <option value="Transport" class="OptionDeliveryTransportType"><i class='bx bxs-component'></i>Transport</option>
            <option value="Becyclete" class="OptionDeliveryTransportType"><i class='bx bx-cycling'></i>Becyclete</option>
            <option value="Autres" class="OptionDeliveryTransportType"><i class='bx bx-run'></i>Autres</option>
          </select></td>
        </tr>
        <tr>
          <td><label for="mtLivreurSignin">Mot de Pass : </label></td>
          <td><input type="password" name="mtLivreurSignin" id="mtLivreurSignin"></td>
        </tr>
        <tr>
          <td><label for="cmtLivreurSignin">Confirm Mot de Pass : </label></td>
          <td><input type="password" name="cmtLivreurSignin" id="cmtLivreurSignin"></td>
        </tr>
        <tr>
          <td id="tdcheck"><input type="checkbox" name="checkboxLivreurSignin" id="" class="form-checkbox"></td>
          <td><label for="checkboxLivreurSignin">If you acceppt roles</label></td>
        </tr>
        <tr>
          <td><label for="CreateLivreurBtn">Create You Account</label></td>
          <td><input type="submit" value="Create" name="CreateLivreurBtn" id="CreateLivreurBtn"></td>
        </tr>
      </table>
    </form>
  </center>

  </div>
  <br>
          <br>
</section> 

    
     

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


