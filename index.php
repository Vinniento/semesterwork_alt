<?php
  session_start();
?>
<!DOCTYPE html>

<head>
  <title>Index-RatePresentations</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css.css "> 
</head>

<body>
<header class="header">
  <h1>Rate Presentations</h1>
</header>

<nav class="topnav">
  
    <?php
    // Include the correct Nav-Bar depending if the user is logged in
    if (isset($_SESSION['login'])){
      include("loginnav.inc.php");
    }
    else
    {
      include('nav.inc.php');
    }
  ?>
  
</nav>

<div class="row">
  <aside class="column side">
    <h2>Side</h2>
    <p>You can add some additional text here ...</p>
  </aside>
  <main class="column middle" name="Haupt" id="Haupt">
    
    <?php
    //nach dem man sich einlogged, erscheint links oben der button "log out". im file log out wird dem button den content "logout" zugewiesen.
    //Nach der eckigen klammer von content wird der content (logout) eingefügt und die datei wird geöffnet. 
      if (isset($_REQUEST['content'])){
        include($_REQUEST['content'].".inc.php");
      }
      else
      {
        include('main.inc.php');
	include('liste.php');
      }
    ?>
    
    
    
      
  </main>
  <aside class="column side">
    <h2>Side</h2>
    <p>Add here some banners, advertisments interesting stuff ...</p>
  </aside>
</div>
<footer class="footer">
  <p>Impressum: offen</p>
</footer>

</body>
</html>
