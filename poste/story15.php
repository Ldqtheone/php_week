<div class="story">
    <form method="POST" id="formLetter" action="#">
        <h2 id="titleContact">Vos coordonnées :</h2>

        <div class="contactContent">
            <?php
            $contacts = $database->selectAll('contacts');
            $nameDest = array();
            foreach ($contacts as $key => $contact) {
                array_push($nameDest, $contact['firstname'] . ' ' . $contact['lastname']);
            }
            $tools->createSelect("dest", $nameDest, "Choisissez le nom de votre destinataire ");
            echo "<br/>";

            $tools->createSelect("exp", $nameDest, "Choisissez le nom de votre expediteur ");
            echo "<br/>";

            $tools->createInput("checkbox", "prio", "Timbre prioritaire");
            $tools->createInput("checkbox", "confidential", "Confidentiel");
            $tools->createInput("submit", "submitLetter", null, null, "Send", true);
            ?>
        </div>
    </form>

    <?php
    if (isset($_POST['dest']) && isset($_POST['exp']) && isset($_POST['submitLetter']) ) {
        $dest=$_POST['dest'];
        $exp=$_POST['exp'];
        if($dest===$exp){
            echo"<script>alert('Le destinataire doit être different de l\'expéditeur')</script>";
        }else{

        }
    }
    ?>
</div>
