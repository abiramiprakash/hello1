<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header" data-aos="fade-down">
   <section class="flex">
      <a href="home.html" class="logo">Travia.</a>
      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="about.html">about</a>
         <a href="tours.html">tours</a>
         <a href="destinations.html">destinations</a>
         <a href="contact.html">contact</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
</header>

<div class="container contact">
   <h1 class="heading" data-aos="zoom-out">Contact Us</h1>
   <section>
      <div class="row">
         <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $name = $_POST["name"];
             $email = $_POST["email"];
             echo "<p>Thank you for your submission!</p>";
             echo "<p>Name: $name</p>";
             echo "<p>Email: $email</p>";
         }
         ?>
         <form action="contact.html" method="post" data-aos="flip-right">
            <h3>Get in touch</h3>
            <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="box">
            <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="Enter your number" class="box">
            <textarea name="message" class="box" required maxlength="1000" cols="30" rows="10"></textarea>
            <input type="submit" value="Send message" name="send" class="btn">
         </form>
      </div>

      <div class="grid">
         <div class="box" data-aos="fade-up">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <a href="tel:1234567890">+91 6384303080</a>
            <a href="tel:1112223333">+91 9842180330</a>
         </div>
         <div class="box" data-aos="fade-up">
            <i class="fas fa-envelope"></i>
            <h3>Email address</h3>
            <a href="mailto:abinayaprakash2002@gmail.com">abinayaprakash2002@gmail.com</a>
            <a href="mailto:2112117@nec.edu.in.com">2112117@nec.edu.in.com</a>
         </div>
         <div class="box" data-aos="fade-up">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Office address</h3>
            <a href="#">67/52,North Street ,Melagaram,Tenkasi</a>
         </div>
      </div>
   </section>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/script.js"></script>
</body>
</html>
