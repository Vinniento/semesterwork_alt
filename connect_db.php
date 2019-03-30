<?php 
  /* Connect to database */
  $conn = mysqli_connect('localhost', 'oliver', 'nlkj', 'webtech');

  
  
  /* write Query to get username and pwd of all users */
  $sql = 'SELECT username, pwd FROM users';

  /* Actually make the query */
  $data = mysqli_query($conn,$sql);
  
  //make data into an associative array
  $users = mysqli_fetch_all($data, MYSQLI_ASSOC);


?>