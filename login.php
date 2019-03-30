<?php 

  include "connect_db.php";

  //checking if form is sent
/* beim $_GET wird "name" geholt, nicht "value"! */
/* Wenn passwort übereinstimmen, session_start() noch hinzufügen */
if (isset($_GET['submit'])) 


$usernameform = $_GET['username']; 
$passwordform = $_GET['password'];

echo $usernameform . "\n"; 
echo $passwordform;
$_SESSION_Status = session_status();
     //disabled = 0, none = 1, active = 2 
      echo 'status = ' . $_SESSION_Status;
foreach($users as $user) {

/*   $u = $user['username'] === $usernameform && $user['pwd'] === $passwordform ?  true : false ;*/


   if($user['username'] === $usernameform && $user['pwd'] === $passwordform) {
    $_SESSION['login'] = $usernameform;
    print_r($_SESSION);
    //header("location: index.php");
   exit();

   }
    else {
      header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/SemesterWork1/#login");
      exit();
    }
    
  
  
} 
?>