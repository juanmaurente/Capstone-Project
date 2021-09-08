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
    <a href="./Index.php"> <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo"></a>
    <h1 class="first">Election Commission of Australia</h1>
    <div class="sticky-mobile-nav">
      <ion-icon name="menu"></ion-icon>
    </div>
    <div class="container">
                
                <div class="item one">
                    <div class="dropdown"> For Voters
                    <div class="dropdown-content">
                        <a href="./voterLogin.php">Voter Login</a>
                        <a href="./register.php"> Registration</a>
                    </div>
                    </div>
                </div>
                <!-- <div class="item two"> Candidates </div> -->
                <div class="item three"> <a href="./about.php"> About election</a>

                </div>
                <div class="item four"> Information Centre</div>
                <div class="item five "> <a href="./adminLogin.php"> ECOA</a> </div>
                <div class="item zero"> <a href="./Index.php"> Home</a> </div>
                </div>
 
  </header>


    <section class="banner">
     
            <div class="banner-container">
              <div class="banner-items" >
                <h2 class="banner-header">
                    <br> Welcome to ECOA online voting platform
                    <br>Information Center
                </h2>
               
                    </div>
        </div>
</section>

<section class="reading-content">


</section>

<footer>

<div class="footer-banner" style="text-align: justify;" >
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

                    <div class="footxer-link-one">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-facebook"></ion-icon></a>  </div>
                    <div class="footxer-link-two">   <a href="https://twitter.com/auselectoralcom"> <ion-icon name="logo-twitter"></ion-icon></a>   </div>
                      <div class="fooxter-link-three">   <a href="https://www.facebook.com/pages/AEC%20-%20Australian%20Electoral%20Commission/122364357847301/"> <ion-icon name="logo-instagram"></ion-icon></a>  </div>
                       
                </div> 
         




</div>

       
 </footer>
    



<script src="./JavaScript/script.js"></script>
  <!--This is the script towards the google translator api script file-->
    <script type="text/javascript" 
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

</body>
</html>