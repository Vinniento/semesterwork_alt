<div>
<form action="index.php" method="post">
  <label for="username">Username:</label> 
  <input type="text" id="username" name="username" required><br><br> 
  <label for="pwd">Password:</label>  
  <input type="password"  id="pwd" name="password" required><br><br>
  <div id="buttonchooseperson" class="btn-group" style="text-align: center">
  <label>Student</label>
  <input type="radio" value="student" name="chooseperson" id="studentradio">
  <label>Teacher</label>
  <input type="radio" value="teacher" name="chooseperson" id="teacherradio">
  </div>
  <input type="submit" value="Login">
  <input type="hidden" name="content" value="validate">
</form>
</div>

<div id="newacc" class="btn-newacc" style="text-align: left">
<button class="button" onclick="changeHeading()">Create new Account for Teachers here</button>
</div>
  
