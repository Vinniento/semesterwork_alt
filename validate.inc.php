<?php
  $user=$_POST['username'];
  $password=$_POST['password'];
  
  // Pls. add here your Username/Password Validation either through DB or through File
  if ($user==="Vincent" && $password=="nlkj") {
      echo "<h2>Welcome " . $user . " to the program </h2>\n";
      
      //Set the Session Cookie in order to identify the user
      $_SESSION['login'] = $user;
      header("Location: index.php");
  }
  else {
      echo "<h2>Sorry, login incorrect</h2>\n";
      // header("Location: index.php");
  }
?>
  
