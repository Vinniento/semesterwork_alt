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
        <li><a href="index.php" target="Haupt"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.php" target="Haupt"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.php" target="Haupt">About our Project</a></li>
      </ul>
    <a href="#" class="center-align">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php" target="Haupt"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="team.php" target="Haupt"><i class="material-icons left">people</i>Team</a></li>
        <li><a href="about.php" target="Haupt">About our Project</a></li>
        <li><a href="index.php?content=login">Login</a></li>   
      </ul>
  </div>  
</nav>


<div class="container">
  <header>
    <br><h3 class="header center-align">Give your Rating</h3>
    <h5 class="header center-align">(1 is worst and 10 is best)</h5><br>
  </header>

  <div class="row">
    <div class="col s6">
      <header><h5 class="header">As a Group:</h5></header>
    </div>
    <div class="col s6 grey lighten-1">Hier kommt der jeweilige Gruppenname der zu bewertenden Gruppe hin. (soll von selbst entstehen)</div>
  </div>

<br><hr>
<header><br><h5 class="header center-align">Content and Structure</h5><br><br></header>


<form action="rate_check.php" method="post">
<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Introduction</p>
  </div>
  <div class="col s12 m8 l8">
    <form>
      <p class="range-field">
        <input type="range" name="intro" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Gave an Overview?</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Structure of the Presentation itself</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Content</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Conclusion</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>




<br><hr>
<header><br><h5 class="header center-align">Visualization</h5><br><br></header>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Visualization</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<br><hr>
<header><br><h5 class="header center-align">Teamwork</h5><br><br></header>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Acted as a team</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Preparation by the team</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Audience felt necessity to participate</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<br><hr>
<header><br><h5 class="header center-align">Additional Feedback for the group: (optional)</h5><br><br></header>

<div class="row grey lighten-4">
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Additional Feedback</label>
      </div>
    </div>
</div>

<br>
<div class="row">
  <div class="col s12 grey lighten-1">Fragebogen von indivduellem Feedback soll automatisch erstellt werden (entweder nach Anzahl von Teammitgliedern richten, oder random 2 Bögen erstellen, damit die Seite nicht zu lange wird)
  </div>
</div>
<header><br><h5 class="header center-align">Individual Feedback for Group Members</h5><br><br></header>
<br>

<div class="row grey lighten-4">
    <div class="col s6">
      <header><h5 class="header">Group Member:</h5></header>
    </div>
    <div class="col s6 grey lighten-1">Hier kommt der jeweilige Vor- und Nachname der zu bewertenden Person hin. (soll von selbst entstehen)</div>
</div>
<br><hr>
<header><br><h5 class="header center-align">Language</h5><br><br></header>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Articulation</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Talking Speed</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Pronunciation</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Competence</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<br><hr>
<header><br><h5 class="header center-align">Body Language</h5><br><br></header>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Presence</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Eye Contact</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Posture</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Gesture</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<br><hr>
<header><br><h5 class="header center-align">Preparation</h5><br><br></header>

<div class="row grey lighten-4">
  <div class="col s12 m4 l4">
    <p>Preparation</p>
  </div>
  <div class="col s12 m8 l8">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
  </div>
</div>

<br><hr>
<header><br><h5 class="header center-align">Additional Feedback for a groupmember: (optional)</h5><br><br></header>

<div class="row grey lighten-4">
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea2" class="materialize-textarea"></textarea>
        <label for="textarea2">Additional Feedback</label>
      </div>
    </div>
</div>
</div>
</div>

<button class="btn waves-effect waves-light" type="submit" value="Submit Rating">Submit Rating</button>
<input type="hidden" name="submit" value="validate"> <!-- Wofür die zeile und nicht einfach in der drüber den namen einbauen -->
</form>



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
</body>
</html>