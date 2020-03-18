<div class="story">
    <form method="POST" id="formContact" action="">
        <h2 id="titleContact">Vos coordonnées :</h2>

        <div class="contactContent">
            <?php

                echo "<br/>";
                $tools->createInput("text", "nom", null, "Votre nom :", true);
                echo "<br/>";

                echo "<br/>";
                $tools->createInput("text", "prenom", null, "Votre prenom: ", true);
                echo "<br/>";

                echo "<br/>";
                $tools->createInput("date", "birthday", null, "Votre date de naissance : ", true);
                echo "<br/>";

                echo "<br/>";
                $tools->createInput("email", "email", null, "Votre Email : ", true);
                echo "<br/>";

                echo "<br/>";
                $tools->createInput("text", "address", null, "Votre addresse : ", true);
                echo "<br/>";

                $tools->createRadio(["Homme", "Femme"], "Sexe : ", "sex");
                echo "<br/>";

                echo '<div id = "wrapButton">';
                $tools->createInput("submit", "submitContact", "Envoyer", null, true);
                echo '</div>';
        ?>
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
