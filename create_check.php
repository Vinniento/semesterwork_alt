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






$name=$_POST['name'];
$criterion1 =NULL;
if(isset($_POST['criterion 1'])
{
$criterion1 =$_POST['criterion 1'];
}

$criterion2 =NULL;
if(isset($_POST['criterion 2'])
{
$criterion2 =$_POST['criterion 2'];
}

$criterion3 =NULL;
if(isset($_POST['criterion 3'])
{
$criterion3 =$_POST['criterion 3'];
}

$criterion4 =NULL;
if(isset($_POST['criterion 4'])
{
$criterion4 =$_POST['criterion 4'];
}

$criterion5 =NULL;
if(isset($_POST['criterion 5'])
{
$criterion5 =$_POST['criterion 5'];
}

$criterion6 =NULL;
if(isset($_POST['criterion 6'])
{
$criterion6 =$_POST['criterion 6'];
}

$criterion7 =NULL;
if(isset($_POST['criterion 7'])
{
$criterion7 =$_POST['criterion 7'];
}

$criterion8 =NULL;
if(isset($_POST['criterion 8'])
{
$criterion8 =$_POST['criterion 8'];
}



try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`presentions` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  , 
    `zuggriffcode` VARCHAR(50) NOT NULL UNIQUE, 
    `creator` VARCHAR(50) NOT NULL 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }
 $n=5;
$creator=$_SESSION['username'];
$zuggriffcode= getName($n);

$statement = $conn->prepare("INSERT INTO presentions (name, zuggriffcode, creator,) VALUES (:name, :lastname, :zuggriffcode, :creator)");
$statement->execute(array('name' => $name, 'zuggriffcode' => $zuggriffcode, 'creator' => $creator));   

try {
	$nameuser=$name."users";
	
    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`". $nameuser ."` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `user` VARCHAR(50) NOT NULL UNIQUE  , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";


    // use exec() to create table because no results are returned
    $conn->exec($create);
    echo "Table users created successfully";
 }
catch(PDOException $exception)
 {
 echo $create . "<br>" . $exception->getMessage();
 }
 
try {	
	
    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`". $name ."` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `".$criterion1."user` int NOT NULL   , 
	`".$criterion2."user` int NOT NULL   , 
	`".$criterion3."user` int NOT NULL   , 
	`".$criterion4."user` int NOT NULL   , 
	`".$criterion5."user` int NOT NULL   , 
	`".$criterion6."user` int NOT NULL   , 
	`".$criterion7."user` int NOT NULL   , 
	`".$criterion8."user` int NOT NULL   , 
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
<?php
include "header.php";
?>
<a href="addstudent.php"><button>Add Student to Presentation</button> </a>
<?php
include "footer.php";
?>



