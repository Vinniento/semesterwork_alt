<?php

include "header.php";
if (isset($_POST['submit'])) {

    $intro = $_POST['intro'];
    $overview = $_POST['overview'];
    $structure = $_POST['structure'];
    $content = $_POST['content'];
    $conclusion = $_POST['conclusion'];
    $visualization = $_POST['visualization'];
    $acted_as_team = $_POST['acted_as_team'];
    $preperation_team = $_POST['preperation_team'];
    $necessity_participate = $_POST['necessity_participate'];

//    $additional_feedback_team = $_POST['intro'];
 
    $articulation = $_POST['articulation'];
    $talking_speed = $_POST['talking_speed'];
    $pronunciation = $_POST['pronunciation'];
    $competence = $_POST['competence'];
    $body_language = $_POST['body_language'];
    $eye_contact = $_POST['eye_contact'];
    $posture = $_POST['posture'];
    $gesture = $_POST['gesture'];
    $preperation_individual = $_POST['preperation_individual'];
   
//     $additional_feedback_individual = $_POST['intro'];
	$code=$_POST['submit_rating_code'];
	try{
    //create connection to database
    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   $query = "SELECT name FROM presentations WHERE rating_code = :rating_code";
       $statement = $conn->prepare($query);
       $statement->bindParam(':rating_code', $code);
       $statement->execute();
       
	   $tabelle = $statement->fetch(PDO::FETCH_ASSOC);
	   
	   if (isset($_SESSION['username']) && isset($_SESSION['pwd']))
	   {
			$isteacher=$_SESSION['isteacher'];
	   }else
	   {
		    $isteacher=FALSE;
	   }
	   $statement = $conn->prepare("INSERT INTO ".tabelle[name]." (indroduction , overview, structure, content,conclusion,visualization,work_as_team,preperation_team,necessity_participate,feedback_team,articulation,talking_speed,pronounciation,competence,presence,eye_contact,posture,gesture,preperation_individual,feedback_individual,isteacher) VALUES (:name, :id_students, :rating_code, :creator)");
	   $statement->execute(array('indroduction' => $intro, 'overview' => $overview, 'structure' => $structure, 'content' => $content, 'conclusion' => $conclusion, 'visualization' => $visualization, 'work_as_team' => $work_as_team, 'preperation_team' => $preperation_team, 'necessity_participate' => $necessity_participate, 'feedback_team' => $feedback_team, 'articulation' => $articulation, 'talking_speed' => $talking_speed, 'pronounciation' => $pronounciation, 'competence' => $competence, 'presence' => $presence, 'eye_contact' => $eye_contact, 'posture' => $posture, 'gesture' => $gesture, 'preperation_individual' => $preperation_individual, 'feedback_individual' => $feedback_individual, 'isteacher' => $isteacher));
	
	
	
	}catch (PDOException $exception) {
    echo $create . "<br>" . $exception->getMessage();
}

 
} else {

    header("Loction: index.php");
}
?>



<?php

include "footer.php";

?>