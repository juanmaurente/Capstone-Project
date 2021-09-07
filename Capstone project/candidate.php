<?php 
include 'connection.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
     
    </style>
</head>
<body>
    
     
         <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <!--The div underneath contains the google translator link and initial langugage is set to english with en ----->
<div id="google_translate_element"></div>
 <script type="text/javascript"> 
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
    
<header>
 <a href="./Index.php">  <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>  
        <h1 class="first">Election Commission of  Australia</h1>
        <div class="sticky-mobile-nav" ><ion-icon name="menu"></ion-icon></div>
        <div class= "container">
          <div class="item one">
             <a href="./Index.php">Homepage</a> </div>
              <div class="item two">candidates </div>
               <div class="item three"> About election </div>
                <div class="item four"> Information Centre</div>
                 <div class="item five ">    <a href="./logout.php"> Log Out</a> </div>
               <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
        </div>
        <!---This div class will display the user name as per the session --->
         <div class = "user-name" style="position:absolute; bottom: 44%; left: 88% ; font-size: 1.3rem; color:purple;">         <?php 
     echo    $_SESSION['citizenFName'] . " ". $_SESSION['citizenLName'] ;

    
   ?>
    </header>


    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <!---This h2 will display the user name as per the session --->
                <h2 class="banner-header">

                    <br> Welcome <?php 
     echo $_SESSION['citizenFName'] . " ". $_SESSION['citizenLName'] . "!!" ?>
                    <br>Please choose in your Candidate to continue!!!
                </h2>
               
                    </div>
        </div>

        <h1>Candidates</h1>
        <centre> 
        <div class="containerT">
            <div id="C1-box">
              <h1> Kripu </h1>
                <p>this will display a picture of the candidate as well as some details relevant to the voter
</p>
<Button> Select </Button>
            </div>
              
            <div id="C2-box">
              <h1>Teresa</h1>
                <p>
                   Candidate 2 image here
                </p>
                <Button> Select </Button>
            </div>
              
            <div id="C3-box">
                <!---img src= --->
              <h1> Juan </h1>
              <p> candidate 3 image here</p>
              <Button> Select </Button>
            </div>
        </div>
        </centre>





<div class="footer-banner" >
    <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

<div class= "footer-details">
    <p style="font-family: 'Poppins', sans-serif; font-size: 1.1em;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


     <div class= "footer-container" style="margin-top: 50px;"> 
             <div class="footer-item one"> Homepage</div>
              <div class="footer-item two">For candidates </div>
               <div class="footer-item three"> About election </div>
                <div class="footer-item four"> Information Centre</div>
                 <div class ="footer-item five "> The ECOA </div>
                  </div>




</div>

       <div class="footer-link">

                    <div class="footxer-link-one">   <ion-icon name="logo-facebook"></ion-icon></div>
                    <div class="footxer-link-two"> <ion-icon name="logo-twitter"></ion-icon></div>
                      <div class="fooxter-link-three"> <ion-icon name="logo-instagram"></ion-icon></div>
                       
                </div> 
         




</div>

       
 </footer>
    



<script src="../JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>