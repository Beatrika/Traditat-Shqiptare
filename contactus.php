<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <script src="https://kit.fontawesome.com/de3d3da404.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="contactus.css">
    </head>
    <body>
        <div class="navbar" style="background-color: #2d2a30;">
            <nav>
                <ul>
                    <li class="home"><a href="index.php">HOME</a></li>
                    <li><a href="login.html"target="_blank" class="hover1">LOG-IN</a></li>
                    <li><a href="aboutus.html"target="_blank">ABOUT</a></li>
                    <li><a href="contactus.html" target="_blank">CONTACT</a></li>
                </ul>
            </nav>
            <img src="menu.png" class="menu-icon">
        </div>

        <section class="contact">
            <div class="content">
                <h2 id="con" style="color: rgb(253, 247, 247);">A dini hala ma shumë?</h2>
                <p style="color: rgb(251, 246, 246);">Nëse keni sugjerime rreth përpunimit të informacioneve të dhëna, apo nëse keni mesazhe të tjera rreth traditave tona që mendoni se janë të vlefshme për tu percjellur, 
                    mos hezitoni të na kontaktoni dhe të zgjerojmë diazepanin e diturisë rreth vlerave tona!
                    
                    !</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">
                           <a href="test.html"> <h3>Address</h3></a>
                            <p style="color: blue;">Prishtine,<br>10000</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                           <a href="test.html"> <h3>Phone</h3></a>
                            <p id="tel" style="color: blue;">044-555-555</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p id="email"><a href="mailto:traditatshqiptaree@gmail.com">traditat_shqiptaree@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="" method="post" target="_blank">
                        <h2>Na kontaktoni!</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Emri dhe Mbiemri</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Shkruani një mesazh...</span>
                        </div>
                        <div class="inputBox">
                           <input type="submit" name="" value="Dërgo" >
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Traditat<span>Shqiptare</span></h3>
    
                <p class="footer-links">
                    <a href="index.php">Home</a>
    
                    <a href="aboutus.html">About</a>
    
                    <a href="contactus.php">Contact</a>
    
                    <a href="login.php">Log in</a>
                </p>
    
                <p class="footer-company-name">Copyright © 2022 <strong>TraditatShqiptare</strong>
                All rights reserved</p>
            </div>
    
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Prishtine</span></p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+383445566</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="">traditatshqiptaree@gmail.com</a></p>
                </div>
            </div>
    
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    <strong>Traditat Shqiptare</strong> është themeluar me qëllim që të informojm njerëzit e interesuar rreth traditave tona  të cilat kanë nevojë të zbërthehen se si kanë qendruar dhe ndryshuar ndër shekuj.
                    Tek ne do të gjeni material për veshjet shqiptare, kuzhinën, besimin, dhe kulturën shqiptare në përgjithësi.
                </p>
                <div class="footer-icons">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
    
          </footer>
    </body>
    
</html>