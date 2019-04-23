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

/*     $additional_feedback_team = $_POST['intro'];
 */
    $articulation = $_POST['articulation'];
    $talking_speed = $_POST['talking_speed'];
    $pronunciation = $_POST['pronunciation'];
    $competence = $_POST['competence'];
    $body_language = $_POST['body_language'];
    $eye_contact = $_POST['eye_contact'];
    $posture = $_POST['posture'];
    $gesture = $_POST['gesture'];
    $preperation_individual = $_POST['preperation_individual'];
   
/*     $additional_feedback_individual = $_POST['intro'];
 */
} else {

    header("Loction: index.php");
}
?>



<?php

include "footer.php";

?>