<?php
  //LogOut the user by unsetting the sesison cookie
  unset($_SESSION['login']);
  header("Location: index.php");
?>
  
