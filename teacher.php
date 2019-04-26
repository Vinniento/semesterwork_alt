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


    function createTableFromJSON() {
        hideAll();
        document.getElementById('create_groups').style.display = "block";
        //entweder id ist falsch geplaced oder json file falsch geladen?
        var students = [
    {"firstname":"stud","lastname":"h"},
    {"firstname":"vincent","lastname":"schauer"},
    {"firstname":"hans","lastname":"mayer"},
    {"firstname":"lucas","lastname":"bla"},
    {"firstname":"lucas","lastname":"thiESS"}];
        
        // EXTRACT VALUE FOR HTML HEADER. 
        // ('Book ID', 'Book Name', 'Category' and 'Price')
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
    <input type="button" name="create_groups" value="Create Groups" onlick ="showCreateGroups()" onclick="createTableFromJSON()">
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

<div class="container green" id="create_groups" style="display:none;">



    Tabelle mit Studenten die sich in Datenbank befinden -> hier darstellen, falls möglich siehe so wie collection unten dargestellt.
    Diese Studenten müssen idealerweise mit Drag&Drop in Gruppen hinzugefügt werden (so wie es im Moodle ist).

    Stellen wir uns ungefähr so vor:
    Rechteck wo man die Students reinzieht, darüber gruppenname --> dann ein Button zum bestätigen. und nach dem bestätigen wird automatisch eine mail an die adresse der Studenten versendet.


    <ul class="collection with-header">
        <li class="collection-header">
            <h4>Students</h4>
        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle blue">person</i>
            <span class="title">First Name & Last Name</span>

            <a href="" class="secondary-content">

            </a>
        </li>
    </ul>


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