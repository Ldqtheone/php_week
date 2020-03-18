<div class="story">
    <form method="POST" id="formContact" action="#">
        <h2 id="titleContact">Vos coordonnées :</h2>

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

                $tools->createRadio("contactGender", ["Man", "Woman"], "Gender : ");
                echo "<br/>";

                echo '<div id = "wrapButton">';
                    $tools->createInput("submit", "submitContact", null, null, "Send", true);
                echo '</div>';
            ?>
        </div>
    </form>

    <?php
        if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['birthday']) &&
            isset($_POST['address']))
        {
            $user_data = array(
                'firstName' => $_POST['contactFirstName'],
                'name' => $_POST['contactName'],
                'birthday' => $_POST['contactBirthday'],
                'email' => $_POST['contactEmail'],
                'address' => $_POST['contactAddress'],
                'gender' => $_POST['contactGender']
            );

            $database->insertInto('contacts', $user_data);
        }
    ?>
</div>
