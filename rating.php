<?php
include "header.php";

?>


<div id="buttonBar" class="btn-group">
    <button class="button" onclick="changeRatings()">Add Number to Rating</button>
  </div>





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