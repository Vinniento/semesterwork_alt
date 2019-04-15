<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$institution = $_POST['institution'];
$email = $_POST['email'];

if($_POST['pwd'] == $_POST['pwd1']){
$pwd = password_hash((htmlspecialchars($_POST['pwd'])), PASSWORD_BCRYPT); }

else{
    echo "pwd falsch!";
    header("Location: login.php");
}


try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`users` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , 
    `institution` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `pwd` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }

 
$statement = $conn->prepare("INSERT INTO users (firstname, lastname, institution, email, pwd) VALUES (:firstname, :lastname, :institution, :email, :pwd)");
$statement->execute(array('firstname' => $firstname, 'lastname' => $lastname, 'institution' => $institution, 'email' => $email, 'pwd' => $pwd));   


?>

