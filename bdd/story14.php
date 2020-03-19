<h2>Story 14 : Mise à jour de contact</h2>
<div class="story">
    <?php
        $contacts = $database->selectAll('contacts');
    ?>
    <form action="" method="post">
        <?php
            if(!empty($contacts)) {
                foreach ($contacts as $key => $contact) {
                    $contactName[$contact['id']] = $contact['firstname'];
                }
                $tools->createSelect("contactSelect", $contactName, "Editer quel contact ? ");
                $tools->createInput("submit", "checkContact");
            }
            else{
                echo "Aucun contact présent dans la base de données";
            }
        ?>
    </form>
    <?php
        if (isset($_POST["checkContact"]))
        {
            $toUpdate = $database->selectSpecific(['*'], "contacts", array( 'id' =>  $_POST['contactSelect']));
    ?>
    <form action="" method="post">
        <?php

        $tools->createInput("hidden", "updateId", null ,null, $toUpdate['id']);
        echo "<br/>";

        $tools->createInput("text", "updateFirstName", "Enter your first name : ", "First Name", $toUpdate['firstname'], true);
        echo "<br/>";

        $tools->createInput("text", "updateLastName", "Enter your name : ", "Name", $toUpdate['lastname'], true);
        echo "<br/>";

        $tools->createInput("text", "updateBirthdate", "Enter your birthday : ", "Birthday", $toUpdate['birthdate'], true);

        $tools->createInput("email", "updateEmail", "Enter your email : ", "Email", $toUpdate['mail'], true);
        echo "<br/>";

        $tools->createInput("text", "updateAddress", "Enter your address : ", "Address", $toUpdate['address'], true);
        echo "<br/>";

        echo '<div id = "wrapButton">';
        $tools->createInput("submit", "editContact", null, null, "Send", true);
        echo '</div>';
        ?>
    </form>
    <?php
        }
        if(isset($_POST['editContact'])){

            $user_data = array(
                'firstname' => $_POST['updateFirstName'],
                'lastname' => $_POST['updateLastName'],
                'birthdate' => $_POST['updateBirthdate'],
                'mail' => $_POST['updateEmail'],
                'address' => $_POST['updateAddress']
            );
            $update_where = array( 'id' => $_POST['updateId']);

            $database->update("contacts", $user_data, $update_where);
        }
    ?>
</div>