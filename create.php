<?php

include "header.php";

?>

<div >
<form action="create_check.php" method="POST">

<label for="presi_name">name of the presention: </label> 
  <input type="text"  name="presi_name" value= "presi_name" required><br>

<label for="criterion1"> criterion 1 :</label> 
  <input type="text"  name="criterion1" value= "Introduction" ><br>
  
  <label for="criterion2"> criterion 2 :</label>   
  <input type="text"  name="criterion2"  value= "Gave_an_overview?" ><br>
  
  <label for="criterion3"> criterion 3 :</label>   
  <input type="text"  name="criterion3" value= "Content"  ><br>
  
  <label for="criterion4"> criterion 4 :</label>   
  <input type="text"  name="criterion4" value= "Conclusion"><br>
  
  <label for="criterion5"> criterion 5 :</label>   
  <input type="text"  name="criterion5"  value= "Visualization_of_the_presentation"><br>
  
  <label for="criterion6"> criterion 6 :</label>   
  <input type="text"  name="criterion6"  value= "Acted_as_a_team"><br>
  
  <label for="criterion7"> criterion 7 :</label>   
  <input type="text"  name="criterion7"  value= "Preparation_by_the_team"><br>
  
  <label for="criterion8"> criterion 8 :</label>   
  <input type="text"  name="criterion8"  value= "Audience_felt_necessity_to_participate"><br>

  <input type="submit" value="Create" >
  <input type="hidden" name="submit" value="validate">
</form>
</div>



<!-- <div style="text-align: center">
<a href="create_check.php"><button>Create new Presentation</button> </a> -->
</div>






<?php

include "footer.php";

?>