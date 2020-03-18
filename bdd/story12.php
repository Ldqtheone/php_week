<div class="story">
    <form method="POST" id="formContact" action="">
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

                $tools->createRadio(["Man", "Woman"], "Gender : ", "contactGender");
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
                'firstname' => $_POST['prenom'],
                'lastname' => $_POST['nom'],
                'birthdate' => $_POST['birthday'],
                'mail' => $_POST['email'],
                'address' => $_POST['address'],
                'gender' => $_POST['sex']
            );

            $database->insertInto('contacts', $user_data);
        }
    ?>
</div>
