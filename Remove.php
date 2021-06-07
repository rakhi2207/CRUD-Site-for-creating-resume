<?php
     $host="localhost";
     $user="root";
     $db="User";
     $password="";
      $check=mysqli_connect($host,$user,$password,$db);
      if(!$check)
      {
          die(mysqli_connect_error());
      }
      session_start();
      $email=$_SESSION['email'];
      $sql="Delete from User where Email='$email'";
      mysqli_query($check,$sql);
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Your profile is sucessfully deleted")';
        echo '</script>';
        session_destroy();
        header('location:home.php');


?>