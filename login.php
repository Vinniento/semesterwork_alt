<?php 
session_start();
$conn = mysqli_connect('localhost', 'oliver', 'nlkj', 'webtech');
  
  
/* write Query to get username and pwd of all users */
$sql = "SELECT username, pwd FROM users WHERE username =  '".$_GET['username']."' ";

/* Actually make the query */
$data = mysqli_query($conn,$sql);

//make data into an associative array so we can use it
$users = mysqli_fetch_all($data, MYSQLI_ASSOC);



  //checking if form is sent
/* beim $_GET wird "name" geholt, nicht "value"! */
/* Wenn passwort übereinstimmen, session_start() noch hinzufügen */
if (isset($_GET['submit'])) 


$usernameform = $_GET['username']; 
$passwordform = $_GET['password'];

echo $usernameform . "\n"; 
echo $passwordform;

foreach($users as $user) {

/*   $u = $user['username'] === $usernameform && $user['pwd'] === $passwordform ?  true : false ;*/


   if($user['username'] === $usernameform && $user['pwd'] === $passwordform) {
    $_SESSION['login'] = $user['username'];
    
     //disabled = 0, NULL = 1, active = 2 
      echo '    Session status = ' . session_status();
     print_r($_SESSION);
     echo ' -- right login --';
      header("location: index.php");
     

   }
    else {
      echo ' -- wrong login --';
      //header("Location: /semesterwork/#login");
      
    }
    
  
  
} 
?>