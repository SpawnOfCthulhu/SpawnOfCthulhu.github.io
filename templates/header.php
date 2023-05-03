<?php
  session_start();

  //$name = $_SESSION['name'];

  if($_SERVER['QUERY_STRING'] == 'noname'){
    session_unset();
  }
  

?>

<head>
  <title>Website name</title>
  <link rel="stylesheet" href="header-stylesheet.css">
  <link rel="stylesheet" href="footer-stylesheet.css">
  <link rel="stylesheet" href="index-stylesheet.css">
  <link rel="stylesheet" href="reg-form-stylesheet.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="products.css">
  <link rel="stylesheet" href="adim-stylesheet.css">
  


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
</head>
<body>
  <div class="header">
      <div class="menu">
        <div class="logo">
          <a href="index.php">
           <img src="images/Team2Logo2.png" alt="">
          </a>
        </div>
          <ul class="nav-area">
            <li>Hello, > <li>
            <li><a href="index.php">Home</a></li>
            <li><a href="placeholder.php">About</a></li>
            <li><a href="reg-form.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            
            
          </ul>
      </div>