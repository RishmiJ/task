<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];
      
      

      $request = " insert into users(name, email, phone, password) values('$name','$email','$phone','$password') ";
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>