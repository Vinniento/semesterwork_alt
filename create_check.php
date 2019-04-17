<?php
$name=$_POST['name'];
$criterion1 ;=NULL
if(isset($_POST['criterion 1'])
{
$criterion1 =$_POST['criterion 1'];
}

$criterion2 ;=NULL
if(isset($_POST['criterion 2'])
{
$criterion2 =$_POST['criterion 2'];
}

$criterion3 ;=NULL
if(isset($_POST['criterion 3'])
{
$criterion3 =$_POST['criterion 3'];
}

$criterion4 ;=NULL
if(isset($_POST['criterion 4'])
{
$criterion4 =$_POST['criterion 4'];
}

$criterion5 ;=NULL
if(isset($_POST['criterion 5'])
{
$criterion5 =$_POST['criterion 5'];
}

$criterion6 ;=NULL
if(isset($_POST['criterion 6'])
{
$criterion6 =$_POST['criterion 6'];
}

$criterion7 ;=NULL
if(isset($_POST['criterion 7'])
{
$criterion7 =$_POST['criterion 7'];
}

$criterion8 ;=NULL
if(isset($_POST['criterion 8'])
{
$criterion8 =$_POST['criterion 8'];
}



try {

    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $create= "CREATE TABLE IF NOT EXISTS `webtech`.`users` 
    ( `id` INT(30) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL UNIQUE  , 
    `zuggriffcod` VARCHAR(50) NOT NULL UNIQUE, 
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
























?>
<?php
include "header.php";
?>

<?php
include "footer.php";
?>



