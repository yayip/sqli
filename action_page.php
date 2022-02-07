<?php
   include("config/connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $user = mysqli_real_escape_string($db,$_POST['uname']);
      $pass = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT id FROM login WHERE username = '$user' and password = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
		mysqli_close($db);

      if ($count == 1) {
         session_start();
         $_SESSION['username'] = $user;
         
         header("location: home.php");
      } else {
         if ($user == "john"){
            $error = "Your password is invalid !";
            $_SESSION["error"] = $error;
            header("location: index.php");
         } elseif ($user == "doe") {
            $error = "Your password is invalid !";
            $_SESSION["error"] = $error;
            header("location: index.php");
         } else {
            $error = "Your username or password is invalid !";
            $_SESSION["error"] = $error;
            header("location: index.php");
         }
         
      }
   }
?>