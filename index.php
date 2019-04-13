<?php
include "header.php";

?>

  <div class="row indigo darken-4 no-margin no-margin-bottom">
    <div class="col s4 m4 l4 hide-on-small-only indigo darken-4"></div>
    <div class="col s8 m6 l4 offset-s2 offset-m3">
      <div class="card">
        <div class="card-content indigo lighten-4 center-align">
        <a href="#" class="myButton">Rate!</a>
          <!--<button class="btn btn-royal-blue">Rate!</button>-->
          <!--<a href="#" class="waves-effect waves-light btn-large s12 m6 l6 pulse">Rate!</a>-->
        </div>
        <div class="card-content indigo lighten-5">
          <div class="input-field center">
            <input id="code" type="text" class="validate">
            <label for="code">Enter code here!</label>
            <span class="helper-text" data-error="invalid code" data-success="valid code"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="col s4 m4 l4 hide-on-small-only"></div>
  </div>

<?php

include "footer.php";

?>