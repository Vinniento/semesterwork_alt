<?php

include "header.php";

?>

<script>
    function createTableFromJSON() {
        hideAll();
        document.getElementById('create_groups').style.display = "block";
        let con = new XMLHttpRequest(); //Create Object
        console.log("1");
        con.open("GET", "teacher_check.php", true); //open the connection
        con.onreadystatechange = function() { //define Callback function
            if (con.readyState == 4 && con.status == 200) {
                console.log("2");
                console.log(this.responseText);
                let response = this.responseText;
                let students = JSON.parse(this.responseText); //Convert String back into JSON object
                console.log(students);
                let col = [];
                for (let key in students[0]) {
                    col.push(key);
                }

                // CREATE DYNAMIC TABLE.
                let table = document.createElement("table");

                // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.
                let tr = table.insertRow(-1); // TABLE ROW AT THE END
                let th = document.createElement("th");
                th.innerHTML = "SELECT";
                tr.appendChild(th);
                for (let i = 0; i < 2; i++) {
                    let th = document.createElement("th"); // TABLE HEADER.
                    th.innerHTML = col[i];
                    tr.appendChild(th);
                }

                // ADD JSON DATA TO THE TABLE AS ROWS.
                for (let i = 0; i < students.length; i++) {
                    tr = table.insertRow(-1);
                    var checkbox = document.createElement('input');
                    checkbox.type = "checkbox";


                    console.log(students[i][col[0]]);

                    tr.appendChild(checkbox);

                    for (let j = 0; j < 2; j++) {
                        let tabCell = tr.insertCell(-1);
                        tabCell.innerHTML = students[i][col[j]];
                        checkbox.setAttribute('name', students[i][col[2]]);
                    }
                }
                // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
                let divContainer = document.getElementById("create_groups");
                //divContainer.innerHTML = "";
                divContainer.appendChild(table);
            }

        }

        con.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //Set appropriate request Header
        con.send(); //Request File Content
    }


    function formSend() {


        var inputValue = "hello="+"blub";
        
        let con = new XMLHttpRequest(); //Create Object (verbindungsaufbau)
        con.open('post', 'create_check.php'); //open the connection
        con.onreadystatechange = function() { //define Callback function
            if (con.readyState === 4 && con.status === 200) { //4 -> server ist fertig
                window.location.href = "create_check.php";

            }

        };
        con.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        con.send(inputValue);

    }
</script>

<div class="container">
    <form action="teacher.php" method="post">
        <input type="button" name="add_students" value="Add Students" onclick="showAddStudents()">
    </form>
    <br>
    <input type="button" name="create_groups" value="Create Groups" onclick="createTableFromJSON()">
    <br>
    <input type="button" name="rate_groups" value="Rate Groups" onclick="showRateGroups()">
    <br>
    <input type="button" name="view_ratings" value="View Ratings" onclick="showViewRatings()">
    </form>
</div>




<div class="container red" id="add_students" style="display:none;">
    <form action="add_students.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        <input type="submit" value="Create Student">
        <input type="hidden" name="content" value="validate">
    </form>
</div>

<div class="container white darken-4" id="create_groups" style="display:none;">


    <div class="container">
        <form  id="form" method = "post">
            <p>
                <label>
                    <span>Groupname:</span>
                    <input type="text" name="groupname" required>
                </label>
            </p>

            <p>
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Vorname, Nachname</span>
                </label>
            </p>
            <p><input type="submit" value="Submit" onclick="formSend()"></p>
        </form>
    </div>


</div>

<div class="container blue" id="rate_groups" style="display:none;">

    mit diesem Button wollen die erstellten Gruppen dargestellt haben --> mit Button um so als Lehrer eingeloggt genau diese (geklickte) Gruppe raten zu können. Ratingscode soll noch angezeigt werden in der form: Access Code: AAAAA

</div>

<div class="container yellow" id="view_ratings" style="display:none;">

    mit diesem Button wollen die gerateten Gruppen dargestellt haben --> mit Button um so als Lehrer die Ratings der Gruppen (Lehrerratings sowie anonyme Student Ratings) zu sehen

</div>

<script>
    function showAddStudents() {
        hideAll();
        document.getElementById('add_students').style.display = "block";
    }

    function showCreateGroups() {
        hideAll();
        document.getElementById('create_groups').style.display = "block";
    }

    function showRateGroups() {
        hideAll();
        document.getElementById('rate_groups').style.display = "block";
    }

    function showViewRatings() {
        hideAll();
        document.getElementById('view_ratings').style.display = "block";
    }

    function hideAll() {
        document.getElementById('add_students').style.display = "none";
        document.getElementById('create_groups').style.display = "none";
        document.getElementById('rate_groups').style.display = "none";
        document.getElementById('view_ratings').style.display = "none";
    }
</script>

<?php

include "footer.php";

?>