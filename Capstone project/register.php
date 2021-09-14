<?php

include 'connection.php';
error_reporting(0);
if (isset($_POST["signup"])) {
  echo "connection is done";
  $citizenID = mysqli_real_escape_string($conn, $_POST["citizenID"]);
  $citizenFName = mysqli_real_escape_string($conn, $_POST["citizenFName"]);
  $citizenLName = mysqli_real_escape_string($conn, $_POST["citizenLName"]);
  $citizenPhone = mysqli_real_escape_string($conn, $_POST["citizenPhonenum"]);
  $citizenDOB = mysqli_real_escape_string($conn, $_POST["citizenDOB"]);
  $citizenEmail = mysqli_real_escape_string($conn, $_POST["citizenEmail"]);
  $citizenAddress = mysqli_real_escape_string($conn, $_POST["citizenAddress"]);
  $citizenCity = mysqli_real_escape_string($conn, $_POST["citizenCity"]);
  $citizenState = mysqli_real_escape_string($conn, $_POST["citizenState"]);
  $citizenZip = mysqli_real_escape_string($conn, $_POST["citizenZip"]);
  $citizenPW = mysqli_real_escape_string($conn, md5($_POST["pw"]));
  $citizenCPW = mysqli_real_escape_string($conn, md5($_POST["confirmpw"]));

  $checkregestringID = mysqli_num_rows(mysqli_query($conn, "SELECT citizenID FROM citizen WHERE citizenID='$citizenID'"));
  if ($citizenPW !== $citizenCPW) {
    echo "<script> alert ('Sorry your password does not match.'); </script>"; ##checking if the input data match

  } else if ($checkregestringID > 1) {
    echo "<script> alert('Hey you have already registered please log in');
    </script>";
  } else {
    $sql = " INSERT INTO citizen(citizenID, citizenFName, citizenLName, citizenPhone, citizenDOB, citizenEmail, citizenAddress, citizenCity, citizenState, citizenZip, citizenPassword, citizenAllowed, employeeID) VALUES ('$citizenID','$citizenFName','$citizenLName','$citizenPhone','$citizenDOB','$citizenEmail','$citizenAddress','$citizenCity','$citizenState','$citizenZip','$citizenPW','0','1') ";
    $result = mysqli_query($conn, $sql);
    header("Location: success.php");
    if ($result) {

      $_POST["citizenID"] = "";
      $_POST["citizenFName"] = "";
      $_POST["citizenLName"] = "";
      $_POST["citizenPhonenum"] = "";
      $_POST["citizenDOB"] = "";
      $_POST["citizenEmail"] = "";
      $_POST["citizenAddress"] = "";
      $_POST["citizenCity"] = "";
      $_POST["citizenState"] = "";
      $_POST["citizenZip"] = "";
      $_POST["pw"] = "";
      $_POST["confirmpw"] = "";

      echo "<script> alert ('User registration success.'); </script>";
    } else {
      echo "<script> alert ('user registration failed.'); </script>";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  <body>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--The div underneath contains the google translator link and initial langugage is set to english with en ----->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en'
        }, 'google_translate_element');
      }
    </script>

<header>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="ecoa-logo">
        <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo">
        <h1 class="organization-name">Electoral Commission of Australia</h1>
    </div>
      <ul>
        <li><a href="./Index.php">Home</a></li>
        <li><a href="">Voters</a> 
          <ul class="dropdown">
          <li><a href="./voterLogin.php">Voter Login</a></li>
          <li><a href="./register.php">Registration</a></li>
          </ul>
        </li> 
        <li><a href="./about.php">About Elections</a></li>
        <li><a href="">Instructive Video</a></li>
        <li><a href="">ECOA</a>
          <ul class="dropdown">
          <li><a href="./adminLogin.php">Staff Login</a></li>
          <li><a href="./contactus.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    </header>
    </header>

    <section class="banner">

    <div class="banner-container">
      <div class="banner-items" style ="text-align: center; font-size: 20px;">
      <br>
      <br> 
      <h2 >Voter Registration Page</h2>

      </div>
    </div>
  </section>
  
  <div class="section-form">
    <div class="login">
      <h3>Please enter your details </h3>
      <p id="template"></p>
    <br>
        <form action="#" method="post" onsubmit="return validateRegister();">

          <p id="msg" style="color:red;"></p>

          <input type="text" name="citizenFName" id="fname" placeholder="First Name" value="<?php echo $_POST["citizenFName"]; ?>">
          <input type="text" name="citizenLName" id="lname" placeholder="Last Name" value="<?php echo $_POST["citizenLName"]; ?>">
          <input type="number" name="citizenID" id="cid" placeholder="Citizenship ID" value="<?php echo $_POST["citizenID"]; ?>">
          <input type="number" name="citizenPhonenum" id="phonenum" placeholder="Phone Number" value="<?php echo $_POST["citizenPhonenum"]; ?>">
          <input type="date" name="citizenDOB" id="Dateof" placeholder="dd/mm/yyyy" value="<?php echo $_POST["citizenDOB"]; ?>">
          <input type="email" name="citizenEmail" id="cEmail" placeholder="Email" value="<?php echo $_POST["citizenEmail"]; ?>">
          <input type="text" name="citizenAddress" id="caddress" placeholder="Address" value="<?php echo $_POST["citizenAddress"]; ?>">
          <input type="text" name="citizenCity" id="city" placeholder="City" value="<?php echo $_POST["citizenCity"]; ?>">
          <select name="citizenState" id="state" value="<?php echo $_POST["citizenState"]; ?>">
            <option value="NSW">New South Wales</option>
            <option value="VIC">Victoria</option>
            <option value="SA">South Australia</option>
            <option value="WA">Western Australia</option>
            <option value="TAS">Tasmania</option>
            <option value="QLD">Queensland</option>
            <option value="NT">Northern Territory</option>
          </select>
          <!-- <input type="text" name="citizenState" id="state" placeholder="State" value="<?php echo $_POST["citizenState"]; ?>"> -->
          <input type="number" name="citizenZip" id="Zip" placeholder="Postal Code" value="<?php echo $_POST["citizenZip"]; ?>">
          <br>
          <label for="pw">Insert a Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
          <input type="password" name="pw" id="Citizenpw" placeholder="Password" value="<?php echo $_POST["pw"]; ?>" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
          <br>
          <label for="confirmpw">Confirm the Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
          <input type="password" name="confirmpw" id="cpw" placeholder="Password" value="<?php echo $_POST["confirmpw"]; ?>" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
          <br>
          <br>
          <input type="submit" class="button" name="signup" value="SIGN UP">
          <br>
          <br>
          Do you have an account? Please, <a href="./voterLogin.php" style="color:#4c5ae0;">Login Here</a>
        </form>

      </div>
    </div>
    <footer>
    <div class="footer-details">
      <h3>Election Comission of Australia</h3>
      <p>The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>

      <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./login.php">Voters Login</a></div>
        <div class="footer-item"> <a href="./registration.php">Create Account</a></div>
        <div class="footer-item"> <a href="./about.php">About Elections</a></div>
        <div class="footer-item"> <a href="./about.php">Instructive Video</a></div>
        <div class="footer-item"> <a href="./adminLogin.php">Staff Login</a></div>
        <div class="footer-item"> <a href="./contactus.php">Contact Us</a></div>
      </div>
    </div>
    <!--This div in particular contains links to various platforms and is set to flex-->

    <div class="footer-social-links">

      <div>
        <ion-icon name="logo-facebook"></ion-icon>
      </div>
      <div>
        <ion-icon name="logo-twitter"></ion-icon>
      </div>
      <div>
        <ion-icon name="logo-instagram"></ion-icon>
      </div>
    </div>

  </footer>

      <script src="./JavaScript/register.js"></script>
      <!--This is the script towards the google translator api script file-->
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
      </script>

  </body>

</html>