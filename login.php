<?php

include "header.php";

?>

<div>
<form action="login_check.php" method="post">
  <label for="username">Username:</label> 
  <input type="text" id="username" name="username" value= "testuser" required><br><br> 
  <label for="pwd">Password:</label>  
  <input type="password"  id="pwd" name="password" value= "nlkj" required><br><br>
 
 
  <div style="text-align: center">
  <label>Student</label>
  <input type="radio" value="student" name="chooseperson" id="studentradio">
  <label>Teacher</label>
  <input type="radio" value="teacher" name="chooseperson" id="teacherradio">
  </div>
  <input type="submit" value="Login">
  <input type="hidden" name="submit" value="validate">
</form>
</div>

<div style="text-align: center">
<a href="create_account.php"><button>Create new Account for Teachers here</button> </a>
</div>
  
<?php

include "footer.php";

?>
