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
  <script src="https://unpkg.com/jquery"></script>
  <script src="https://surveyjs.azureedge.net/1.0.78/survey.jquery.js"></script>
  <!--<link href="https://surveyjs.azureedge.net/1.0.78/survey.css" type="text/css" rel="stylesheet"/>-->
  <link rel="stylesheet" href="survey.css">
  <title>Index-RatePresentations</title>
  <html lang="de">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>  
<nav class="topnav">
  <div class="container">  
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index2.php" target="Haupt"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.php" target="Haupt"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.php" target="Haupt">About our Project</a></li>
      </ul>
    <a href="#" class="center-align">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index2.php" target="Haupt"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.php" target="Haupt"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.php" target="Haupt">About our Project</a></li>
        <li><a href="index.php?content=login">Login</a></li>   
      </ul>
  </div>  
</nav>

<!-- survey-->

<!--<div class="container">-->          
    <div id="ratingElement"></div>
    <div id="ratingResult"></div>
<!--</div>-->


<script type="text/javascript" src="./index.js"></script>

<footer class="footer indigo darken-4">
  <div class="row no-margin no-margin-bottom">
    <div class="col s8 m6 l4 offset-s2 offset-m3 indigo-text text-lighten-4">
      <h5>Impressum</h5>
      <br>
      <h6> © 2019 Copyright blablabla</h6>
    </div>
      <div class="col s8 m6 l4 offset-s2 offset-m3 indigo-text text-lighten-4">
      <h5>Links:</h5>
      <br>
      <a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by Layerace - www.freepik.com</a>
      </div>
      <div class="col s8 m6 l4 offset-s2 offset-m3"></div>
    
  </div>
  <div class="footer-copyright">
    <div class="container">
   
    </div>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
<script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.scrollspy').scrollSpy();
	});
</script>
</script>
<script>
  $('#Code').val('Enter Code here!');
  M.textareaAutoResize($('#Code'));
</script>
<script>
$(function() {
    Materialize.updateTextFields();
});
</script>
</body>
</html>