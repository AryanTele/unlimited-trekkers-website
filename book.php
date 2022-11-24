<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>
<style>
   input[type="number"]::-webkit-inner-spin-button,
   input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
   }
</style>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">WILD WONDER TREKKERS</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>
   <form action="book.php" method="post" class="book-form" id="form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your Name" name="name" id="name"required>
         </div>
         <!-- <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div> -->
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your Number" maxlength="10" name="phone" id="phone" required>
         </div>
         <!-- <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div> -->
         <div class="inputBox">
            <span>Destination :</span>
            <br>
            <select name="location" id="location"  required>
               
               <option value="devkund">Devkund</option>
               <option value="ratnagiri">Ratnagiri</option>
               <option value="lohagad">Lohagad</option>
               <option value="raigad">Raigad</option>
            </select>
            <!-- <input type="text" placeholder="place you want to visit" name="location"> -->
         </div>
         <!-- <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div> -->
         <!-- <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div> -->
         <!-- <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div> -->
         <div class="inputBox">
            <span>And Most Important</span>
            <input type="number" placeholder="HAVE AN AWESOME TREK :)" name="guests" disabled>
         </div>
      </div>

      <input  type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> telearyan12@gmail..com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400074 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit"> created and maintained <span>Aryan Tele</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script>
   // var form = document.getElementById('form');
   // form.addEventListener('submit', function() {
   //    event.preventDefault();
   //    sweetalertclick();
   // });
   // function sweetalertclick() {
   //       Swal.fire("Hello World!");
   // }
   function sweetalertclick() {
         Swal.fire(
         'Good job!',
         'Our Executive will contact you shortly!',
         'success'
         )
   }
</script>

</body>
</html>

<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      // $email = $_POST['email'];
      $phone = $_POST['phone'];
      // $address = $_POST['address'];
      $location = $_POST['location'];
      // $guests = $_POST['guests'];
      // $arrivals = $_POST['arrivals'];

      
      $request = " insert into book_form(name, phone, location) values('$name','$phone','$location') ";
      mysqli_query($connection, $request);
      echo "<script>sweetalertclick()</script>";
      // header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>