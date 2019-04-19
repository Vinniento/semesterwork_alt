<?php
session_start();

?>

<!DOCTYPE html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="rules.css">
  <title>Index-RatePresentations</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
  <header>
  <nav class="topnav">
  <div class="container"> 

    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.html"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.html">About our Project</a></li>

        <?php if(isset($_SESSION['username']) && isset($_SESSION['pwd'])): ?>
        <li><a href="logout.php">Logout</a></li>   

        <?php else: ?>
            <li><a href="login.php">Login</a></li> 
        <?php endif; ?>     

      </ul>
    <a href="#" class="center-align">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.php"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.php">About our Project</a></li>

        <?php if(isset($_SESSION['username']) && isset($_SESSION['pwd'])): ?>
        <li><a href="logout.php">Logout</a></li>   

        <?php if($_SESSION['isteacher']==TRUE):?>
		<li><a href="teacher.php" class ="btn-floating grey darken-4 z-depth-3 center " ><i class="material-icons">account_circle</i></a></li>
		<li><a href="mod.php">modify Presentation</a></li>

    <?php else: ?>
    <li><a href="students.php" class ="btn-floating yellow darken-4 z-depth-3 center " ><i class="material-icons">account_circle</i></a></li>
    <?php
		endif;
		else: 
		?>
            <li><a href="login.php">Login</a></li> 
        <?php endif; ?>  
		
		
		

      </ul>
  </div>  
</nav>
</header>

<!--<section class="content">-->
<div class="parallax-container">
  <br><br>
  <?php  $link = $_SERVER['REQUEST_URI'];

   if($link === "/semesterwork3/login.php"): ?> 
    <h2 class="header center">Please Login</h2>

    <?php elseif($link === "/semesterwork3/index.php"):?>
      <h2 class="header center">Rate Presentations</h2>

   <?php elseif($link === "/semesterwork3/index.php"):?>
    <h2 class="header center">Our Team</h2>

   <?php elseif($link === "/semesterwork3/about.php"):?>
    <h2 class="header center">About this Project</h2>

   <?php elseif($link === "/semesterwork3/team.php"):?>
    <h2 class="header center">Team</h2>

   <?php endif;?>

      <div class="row center">
  <br><br>
    <div class="parallax"><img src="parallax4.jpg">
    </div>
  </div>
  </div>