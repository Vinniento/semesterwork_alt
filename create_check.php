<?php
include "header.php";
?>
<?php

function randcode($n) { 
    $chars= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $j = rand(0, strlen($chars) - 1); 
        $randomString .= $chars[$j]; 
    } 
  
    return $randomString; 
} 






$name = $_POST['presi_name'];
$id_Students = $_POST['id_Students'];



try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`presentions` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  , 
	`id_Students` int NOT NULL UNIQUE  ,
    `zugriffcode` VARCHAR(50) NOT NULL UNIQUE, 
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
$zugriffcode= randcode($n);

$statement = $conn->prepare("INSERT INTO presentions (name, zugriffcode, creator) VALUES (:name, :zugriffcode, :creator)");
$statement->execute(array('name' => $name, 'id_Students' => $id_Students,'zugriffcode' => $zugriffcode, 'creator' => $creator));   
/*
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
 */
try {	
	 echo "<br>tablle 3:<br>";
    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`". $name ."` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `" indroduction"` int NOT NULL   , 
	`".overview"` int NOT NULL   , 
	`"structur"` int NOT NULL   , 
	`"countent"` int NOT NULL   , 
	`"conclutiuon"` int NOT NULL   , 
	`"visulaistion"` int NOT NULL   , 
	`"team"` int NOT NULL   , 
	`"prepration_team"` int NOT NULL   , 
	`"nasatty_pap"` int NOT NULL   , 
	`"feetback_team"` text NOT NULL   , 
	`"aciculatin"` int NOT NULL   , 
	`"tacking"` int NOT NULL   , 
	`"pronuntion"` int NOT NULL   , 
	`"cmopetens"` int NOT NULL   , 
	`"präsnts"` int NOT NULL   , 
	`"eyecontact"` int NOT NULL   , 
	`"posture"` int NOT NULL   , 
	`"gesture"` int NOT NULL   , 
	`"prperatinom"` int NOT NULL   , 
	`"feetpack_individul"` text NOT NULL   , 
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



