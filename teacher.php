<?php

include "header.php";


/* function DumpTable($array_assoc)
{
    if (is_array($array_assoc)) {
        echo '<table class="table">';
        echo '<tr>';
        list($table_title) = $array_assoc;
        foreach ($table_title as $key => &$value) :
            echo '<th>' . $key . '</th>';
        endforeach;
        echo '</tr>';

        foreach ($array_assoc as &$master) :
            echo '<tr>';
            foreach ($master as &$slave) :
                echo '<td>' . $slave . '</td>';
            endforeach;
            echo '</tr>';
        endforeach;
        echo '</table>';
        return;
    }
}
 */

try {
    $conn = new PDO("mysql:host=localhost; dbname=webtech", "oliver", "nlkj");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $isteacher = false;

    $query = "SELECT firstname, lastname FROM users WHERE isteacher = :isteacher";
    $statement = $conn->prepare($query);

    $statement->bindParam(':isteacher', $isteacher);

    $statement->execute();

    //gets row as associative array
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);


    $students = json_encode($users);

    $handle = fopen("students.json", 'w+');

    fwrite($handle, $students);

    //close the file
    fclose($handle);

    //updating and deleting json files
    /* https://www.kodingmadesimple.com/2017/05/add-update-delete-read-json-file-php.html */
} catch (PDOException $error) {
    echo $error;
}


?>
<script>
    //holt die daten aus der JSON datei
    /*  function getdata() {

        hideAll();
        document.getElementById('create_groups').style.display = "block";

        var xttp = new XMLHttpRequest();

        xttp.onreadystatechange = function() {
            
            if (xttp.readyState == 4 && xttp.status == 200) {
                var javaobj = JSON.stringify(xttp.response);
                document.getElementById('create_groups').innerHTML = javaobj;
            }
        };
        xttp.open("GET", "students.json", true);
        xttp.send();
    } */


    function createTableFromJSON() {
        hideAll();
        document.getElementById('create_groups').style.display = "block";
        // EXTRACT VALUE FOR HTML HEADER. 
        // ('Book ID', 'Book Name', 'Category' and 'Price')
        var students = [{
            "firstname": "stud",
            "lastname": "h"
        }, {
            "firstname": "vincent",
            "lastname": "schauer"
        }, {
            "firstname": "hans",
            "lastname": "mayer"
        }, {
            "firstname": "lucas",
            "lastname": "bla"
        }, {
            "firstname": "lucas",
            "lastname": "thiESS"
        }];


/* https://www.experts-exchange.com/questions/23834901/Dynamically-adding-table-row-with-a-checkbox-using-javascript.html
dynamically create checkboxes */

var checkbox = document.createElement("INPUT");
        let col = [];
        for (let key in students[0]) {
            col.push(key);
        }
        // CREATE DYNAMIC TABLE.
        let table = document.createElement("table");
        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.
        let tr = table.insertRow(-1); // TABLE ROW AT THE END
        for (let i = 0; i < col.length; i++) {
            let th = document.createElement("th"); // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
            checkbox.type = "checkbox";

            
        }
        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (let i = 0; i < students.length; i++) {
            tr = table.insertRow(-1);
            for (let j = 0; j < col.length; j++) {
                let tabCell = tr.insertCell(-1);
                tabCell.innerHTML = students[i][col[j]];
            }
        }
        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        let divContainer = document.getElementById("create_groups");
        //divContainer.innerHTML = "";
        divContainer.appendChild(table);
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

<div class="container blue darken-4" id="create_groups" style="display:none;">


    <div class="container">
        <form action="#">
            <p>
                <label>
                    <span>Groupname:</span>
                    <input type="text" name="groupname">
                </label>
            </p>

            <p>
                <label>
                    <input type="checkbox" class="filled-in" />
                    <span>Vorname, Nachname</span>
                </label>
            </p>
            <p><input type="submit" value="Submit"></p>
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