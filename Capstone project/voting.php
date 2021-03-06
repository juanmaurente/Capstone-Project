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
</head>

<body>

    <header>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

        <header>
            <img src="./Images/Citizens Electoral.jfif " alt="ecoa logo" class="logo">
            <h1 class="first">Election Commission of Australia</h1>
            <div class="sticky-mobile-nav" ><ion-icon name="menu"></ion-icon></div>
            <div class="container">
                <div class="item one">
                    <a href="./login.php">For Voters</a>
                </div>
                <div class="item two">For candidates </div>
                <div class="item three"> About election </div>
                <div class="item four"> Information Centre</div>
                <div class="item five "> The ECOA </div>
                <!---  <div class="item six"><ion-icon name="menu"></ion-icon></div>-->
            </div>
        </header>


        <section class="banner">

            <div class="banner-container">
                <div class="banner-items">
                    <h2 class="banner-header">
                        <br> Please cast your vote
                    </h2>

                </div>
            </div>


            <div class="section-form">

                <form action="voting.php" method="post" text-align="center">

                    <input type="submit" name="candidate1" value="candidate1">
                    <input type="submit" name="candidate2" value="candidate2">
                    <input type="submit" name="candidate3" value="candidate3">
                </form>



            </div>

            <footer>

                <div class="footer-banner">
                    <h3 style="color: azure; font-size: 1.1em; font-weight: 550px;">Election comission of Australia</h1>

                        <div class="footer-details">
                            <p style="font-family: 'Dancing Script', cursive;">The ECOA acknowledges the Traditional Owners of country throughout Australia and recognises their continuing connection to land, waters, culture and community. <br> We pay our respects to Elders past, present and emerging.</p>


                          <div class="footer-container" style="margin-top: 50px;">
        <div class="footer-item"> <a href="./voterLogin.php">Voters Login</a></div>
        <div class="footer-item"> <a href="./register.php">Create Account</a></div>
        <div class="footer-item"> <a href="./about.php">About Elections</a></div>
        <div class="footer-item"> <a href="./about.php">Instructive Video</a></div>
        <div class="footer-item"> <a href="./adminLogin.php">Staff Login</a></div>
        <div class="footer-item"> <a href="./contactus.php">Contact Us</a></div>
      </div>
    </div>




                        </div>

                        <div class="footer-link">

                            <div class="footxer-link-one">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </div>
                            <div class="footxer-link-two">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </div>
                            <div class="fooxter-link-three">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </div>

                        </div>





                </div>


            </footer>




            <script src="../JavaScript/script.js"></script>

</body>

</html>