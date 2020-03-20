<div class="story">
    <form method="POST" id="formContact" action="#">
        <h2 id="titleContact">Story 12 : Vos coordonnées :</h2>

        <div class="contactContent">
            <?php

            $tools->createInput("text", "contactFirstName", "Enter your first name : ", "First Name", null, true);
            echo "<br/>";

            $tools->createInput("text", "contactName", "Enter your name : ", "Name", null, true);
            echo "<br/>";

            $tools->createInput("date", "contactBirthday", "Enter your birthday : ", "Birthday", null, true);

            $tools->createInput("email", "contactEmail", "Enter your email : ", "Email", null, true);
            echo "<br/>";

            $tools->createInput("text", "contactAddress", "Enter your address : ", "Address", null, true);
            echo "<br/>";

            $tools->createInput("text", "contactCity", "Enter your city : ", "City", null, true);
            echo "<br/>";

            $tools->createInput("text", "contactPostal", "Enter your postal : ", "Postal", null, true);
            echo "<br/>";

            $tools->createRadio("contactGender", ["Man", "Woman"], "Gender : ");
            echo "<br/>";

            echo '<div id = "wrapButton">';
            $tools->createInput("submit", "submitContact", null, null, "Send", true);
            echo '</div>';
            ?>
        </div>
    </form>

    <?php
    if (isset($_POST['submitContact'])) {

        if($regex->checkValues($_POST['contactEmail'], $_POST['contactBirthday'])){
            $user_data = array(
                'firstname' => $_POST['contactFirstName'],
                'lastname' => $_POST['contactName'],
                'birthdate' => $_POST['contactBirthday'],
                'mail' => $_POST['contactEmail'],
                'address' => $_POST['contactAddress'],
                'gender' => $_POST['contactGender'],
                'city' => $_POST['contactCity'],
                'postal' => $_POST['contactPostal']
            );

         $database->insertInto('contacts', $user_data);
        }
        else{
            echo"<script>alert('L\'addresse email doit être correcte et la date au format : JJ/MM/AAAA')</script>";
        }
    }
    ?>
</div>
