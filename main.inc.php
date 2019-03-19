<?php
    if (isset($_SESSION['login'])){
      echo "Welcome to the program " . $_SESSION['login'];
    }
    else
    {
      echo "<p><b>Please Log In</b><p>";
    }
  ?>


  
