<?php
  //unset session ID, session still active though??
  unset($_SESSION['login']);
  header("Location: index.php");
?>