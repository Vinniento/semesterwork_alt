<?php
session_start();
  //unset session ID, session still active though??
  print_r($_SESSION);
  echo 'Session = ' . session_id();
  unset($_SESSION['login']);
  

  header("Location: index.php");
  
?>