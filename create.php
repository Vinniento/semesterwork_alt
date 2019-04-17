<?php

include "header.php";

?>
<div >
<form action="create_check.php" method="post">
<label for="name">name of the presention:</label> 
  <input type="text"  name="name" value= "name" required><br>
<label for="criterion 1"> criterion 1 :</label> 
  <input type="text"  name="criterion 1" value= "none" ><br>
  
  <label for="criterion 2"> criterion 2 :</label>   
  <input type="text"  name="criterion 2" value= "none" ><br>
  
  <label for="criterion 3"> criterion 3 :</label>   
  <input type="text"  name="criterion 3" value= "none" ><br>
  
  <label for="criterion 4"> criterion 4 :</label>   
  <input type="text"  name="criterion 4" value= "none" ><br>
  
  <label for="criterion 5"> criterion 5 :</label>   
  <input type="text"  name="criterion 5" value= "none" ><br>
  
  <label for="criterion 6"> criterion 6 :</label>   
  <input type="text"  name="criterion 6" value= "none" ><br>
  
  <label for="criterion 7"> criterion 7 :</label>   
  <input type="text"  name="criterion 7" value= "none" ><br>
  
  <label for="criterion 8"> criterion 8 :</label>   
  <input type="text"  name="criterion 8" value= "none" ><br>


</form>
</div>



<div style="text-align: center">
<a href="create_check.php"><button>Create new Presentation</button> </a>
</div>






<?php

include "footer.php";

?>