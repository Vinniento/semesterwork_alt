<?php
include "header.php";
?>
<?php

//von https://www.geeksforgeeks.org/generating-random-string-using-php/
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 






$name = $_POST['presi_name'];
/*
$criterion1 =$_POST['criterion1'];criterion1
$criterion2 =$_POST['criterion2'];
$criterion3 =$_POST['criterion3'];
$criterion4 =$_POST['criterion4'];
$criterion5 =$_POST['criterion5'];
$criterion6 =$_POST['criterion6'];
$criterion7 =$_POST['criterion7'];
$criterion8 =$_POST['criterion8'];
*/

$criterion1 ="NA1";
if(isset($_POST['criterion1'])){
$criterion1 =$_POST['criterion1'];
}

$criterion2 ="NA2";
if(isset($_POST['criterion2'])){
$criterion2 =$_POST['criterion2'];
}

$criterion3 ="NA3";
if(isset($_POST['criterion3'])){
$criterion3 =$_POST['criterion3'];
}

$criterion4 ="NA4";
if(isset($_POST['criterion4'])){
$criterion4 =$_POST['criterion4'];
}

$criterion5 ="NA5";
if(isset($_POST['criterion5'])){
$criterion5 =$_POST['criterion5'];
}

$criterion6 ="NA6";
if(isset($_POST['criterion6'])){
$criterion6 =$_POST['criterion6'];
}

$criterion7 ="NA7";
if(isset($_POST['criterion7'])){
$criterion7 =$_POST['criterion7'];
}

$criterion8 ="NA8";
if(isset($_POST['criterion8'])){
$criterion8 =$_POST['criterion8'];
}



try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`presentions` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  , 
    `zuggriffcode` VARCHAR(50) NOT NULL UNIQUE, 
    `creator` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table presentations created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }
 $n=5;
$creator= $_SESSION['username'];
$zuggriffcode= getName($n);

$statement = $conn->prepare("INSERT INTO presentions (name, zuggriffcode, creator) VALUES (:name, :zuggriffcode, :creator)");
$statement->execute(array('name' => $name, 'zuggriffcode' => $zuggriffcode, 'creator' => $creator));   

try {
	$nameuser= $name."users";
	
    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`". $nameuser ."` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `user` VARCHAR(50) NOT NULL UNIQUE  , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table nameuser created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }
 
try {	
	 echo "<br>tablle 3:<br>";
    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`". $name ."` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `".$criterion1."` int NOT NULL   , 
	`".$criterion2."` int NOT NULL   , 
	`".$criterion3."` int NOT NULL   , 
	`".$criterion4."` int NOT NULL   , 
	`".$criterion5."` int NOT NULL   , 
	`".$criterion6."` int NOT NULL   , 
	`".$criterion7."` int NOT NULL   , 
	`".$criterion8."` int NOT NULL   , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }























?>

<a href="addstudent.php"><button>Add Student to Presentation</button> </a>
<?php
include "footer.php";
?>



