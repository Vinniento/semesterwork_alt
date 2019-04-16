<?php

include "header.php";

?>

<div >
<form action="login_check.php" method="post">
  <label for="username">Username:</label> 
  <input type="text" id="username" name="username" value= "testuser" required><br><br> 
  <label for="password">Password:</label>  
  <input type="password"  id="password" name="pwd" value= "nlkj" required><br><br>
 
 
  <div style="text-align: center">
  <label>
  
  </label>
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
