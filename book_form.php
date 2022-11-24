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
      // header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>