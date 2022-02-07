<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<style type="text/css">
form {
  border: 3px solid #f1f1f1;
  width: 30%;
  height: 60%;
  position: fixed; /* or absolute */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  color: #808080;
}

span {
  color: red;
}

.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #191970;
}
 
.fa {
    width: px;
    float: left;
    text-align: center;
}
 
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}
 
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #191970;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
</style>
<script>
 function todayDate(){
    var d = new Date();
    var n = d.getFullYear() + "  ";
    return document.getElementById("date").innerHTML = n;
  }
</script>

<body onload="todayDate()">
 <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="data:image/png;base64,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" alt="Avatar" class="avatar">
  </div>
  <div class="container">
 
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Enter Username" name="uname" value="" required="">
    </div>

    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Enter Password" name="psw" value="" required="">
    </div>
    <?php
      if(isset($_SESSION["error"])){
          $error = $_SESSION["error"];
          echo "<span>$error</span>";
      }
    ?>  
    <input class="button" type="submit" name="login" value="Sign In">
    
  </div>
</form> 
<footer>
      &copy; <em id="date"></em>John Doe
</footer>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>