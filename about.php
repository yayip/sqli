<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.cts-img {
  width: 50%;
}
</style>
<title>About</title>
</head>
<body>

<div class="sidenav">
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
  <h2>Who are we?</h2>
  <p>Cybertech Solusindo is a professional cybersecurity and risk management firm. Established in 2008, our company provides consulting, outsourcing program and training in the IT risk area. With the help from our experts, we will ensure our clients to protect their business with an improved cybersecurity operational capability.</p>

  <p>With rising concern over increased cyber-crime, Cybertech Solusindo vision is to be the most innovative leader in Information Security Solutions Provider. Our company offers perceptive and innovative solutions to protect our clients critical information and prevent data breaches. We use Information Systems Security Assessment Association Framework (ISSAF) and other world class standardization (OWASP, CIS, and PCI-DSS) to ensure the quality of our services.</p>

  <p>We strive to provide an excellent service with high quality work, professional behaviour, and timely delivery with value for money. With our experience and expertise, trust us to help you to protect your business.</p>

  <img class="cts-img" src="https://cts.co.id/wp-content/uploads/2019/07/ctsmain-retina.png">
</div>

</body>
</html> 