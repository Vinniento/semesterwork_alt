<?php
session_start();
$user_form = htmlspecialchars($_POST['username']);
$pass_form = sha1(htmlspecialchars($_POST['password']));

try{
    //create connection to database
    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['submit'])) {

        if(empty($user_form) && empty ($pass_form)) {
            
                     echo ("all fields are required!");
        }
        else {
            //prepare helps against SQL injections
            $query = "SELECT firstname, password FROM users WHERE firstname = :firstname AND password = :password";
            $statement = $conn->prepare($query);    
            $statement->bindParam(':firstname', $user_form);
            $statement->bindParam(':password', $pass_form);
            $statement->execute();

            //gets row as associative array
            $users = $statement->fetch(PDO::FETCH_ASSOC);
            
            if ($user_form === $users['firstname'] && $pass_form === $users['password']){

                $_SESSION['firstname'] = $user_form;
                $_SESSION['pwd'] = $pass_form;
                print_r($_SESSION);

                echo "login successful";
                
                header("location: index.php");
            }
            else {
/*                 eigentlich zum login page weiterleiten mit einer warnung wäre cool
entweder ein zeichen "wrong login data" oder sowas */ 
               echo ("wrong data!");    
            }   
        }    
    }
}

catch(PDOException $error) {
echo $error;
}
?>
