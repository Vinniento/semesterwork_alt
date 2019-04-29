<?php
include "header.php";
?>

<div id="buttonBar" class="btn-group">
    <button class="button" onclick="changeRatings()">Add Number to Rating</button>
  </div>


<?php

$name = $_POST['name']; //hier muss noch der Name der Gruppe rein, die man bewertet hat
$i=0;

try{
    //create connection to database
	   $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $tablenumber = $conn->prepare("SELECT COUNT(id) FROM ".$name);

    $introduction=0;
    $overview=0;
    $structure=0;
    $content = 0;
    $conclusion = 0;
    $visualization = 0;
    $work_as_team = 0;
    $preperation_team =0; 
    $necessity_participate =0; 
    $articulation = 0;
    $talking_speed = 0;
    $pronounciation = 0;
    $competence = 0;
    $presence = 0;
    $eye_contact =0; 
    $posture = 0;
    $gesture =0;
    $preperation_individual = 0;

for(;i<$tablenumber;$i++) {
    $query = "SELECT indroduction, overview, structure, content,conclusion,visualization,work_as_team,preperation_team,necessity_participate,articulation,talking_speed,pronounciation,competence,presence,eye_contact,posture,gesture,preperation_individual FROM ".$name." WHERE id = :id";
       $statement = $conn->prepare($query);
       $statement->bindParam(':id', $i);
       $statement->execute();       
       $tabelle = $statement->fetch(PDO::FETCH_ASSOC);
       


       $introduction+=$tabelle[indroduction];
       $overview+=$tabelle[overview];
       $structure+=$tabelle[structure];
       $content+=$tabelle[content];
       $conclusion+=$tabelle[conclusion];
       $visualization+=$tabelle[visualization];
       $work_as_team+=$tabelle[work_as_team];
       $preperation_team+=$tabelle[preperation_team];
       $necessity_participate+=$tabelle[necessity_participate];
       $articulation+=$tabelle[articulation];
       $talking_speed+=$tabelle[talking_speed];
       $pronounciation+=$tabelle[pronounciation];
       $competence+=$tabelle[competence];
       $presence+=$tabelle[presence];
       $eye_contact+=$tabelle[eye_contact]; 
       $posture+=$tabelle[posture];
       $gesture+=$tabelle[gesture];
       $preperation_individual+=$tabelle[preperation_individual];
}
$introduction/=$i;
$overview/=$i;
$structure/=$i;
$content/=$i;
$conclusion/=$i;
$visualization/=$i;
$work_as_team/=$i;
$preperation_team/=$i;
$necessity_participate/=$i;
$articulation/=$i;
$talking_speed/=$i;
$pronounciation/=$i;
$competence/=$i;
$presence/=$i;
$eye_contact/=$i;
$posture/=$i;
$gesture/=$i;
$preperation_individual/=$i;
}
catch (PDOException $exception) 
	{
		echo "ERRRRRRROOOOORRRRR";
    echo  "<br>" . $exception->getMessage();
	}

?>




<!--<div class="container">-->
    <div class="row">
        <div class="col s6 m6 l6 indigo lighten-4">
            <!--<div class="container">-->
            <h3 class="center">Students</h3><br>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Content & Structure</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="content_structure"></span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Introduction</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="introduction">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gave an Overview?</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="overview">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Structure of the Presentation itself</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="structure_presentation">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Content</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="content">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Conclusion</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="conclusion">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Visualization</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="visualization">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Teamwork</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="teamwork">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Acted as a Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="acted_as_team">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Preparation by the Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="preparation_team">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Audience felt necessity to participate</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="participation">1</span></p></h5>
                    </div>
                </div>
            <!--</div>-->
        </div>
        <div class="col s6 m6 l6 blue">
        <h3 class="center">Teacher</h3><br>
        <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Content & Structure</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="content_structure">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Introduction</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="introduction">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Gave an Overview?</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="overview">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Structure of the Presentation itself</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="structure_presentation">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Content</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="content">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Conclusion</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="conclusion">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Visualization</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="visualization">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom indigo lighten-3">
                    <div class="col s12 m6 l6">
                    <h5><p class="center"><b>Teamwork</b></p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                    <h5><p><span class="w3-badge w3-xlarge w3-black w3-padding" id="teamwork">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Acted as a Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="acted_as_team">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Preparation by the Team</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="preparation_team">1</span></p></h5>
                    </div>
                </div>
                <div class="row no-margin-bottom">
                    <div class="col s12 m6 l6">
                    <h5><p class="center">Audience felt necessity to participate</p></h5>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                   <h5><p><span class="w3-badge w3-large w3-black" id="participation">1</span></p></h5>
                    </div>
                </div>
    </div>
<!--</div>-->





<script>

function changeRatings() {
      let rating_content = document.getElementById("content_structure");
      rating_content.innerHTML="5.2";
    }

</script>


<?php

include "footer.php";

?>