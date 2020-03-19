<div class="story">
    <form method="POST" id="formLetter" action="#">
        <h2 id="titleContact">Vos coordonnées :</h2>

        <div class="contactContent">
            <?php
            $contacts = $database->selectAll('contacts');
            $nameDest = array();
            foreach ($contacts as $key => $contact) {
                $nameDest[$contact['id']] =  $contact['firstname'] . ' ' . $contact['lastname'];
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
    if (isset($_POST['submitLetter']) ) {
        if($_POST['dest']===$_POST['exp']){
            echo"<script>alert('Le destinataire doit être different de l\'expéditeur')</script>";
        }else{
            $destInfos = $database->selectSpecific(['firstname, lastname, address'], "contacts", array( 'id' =>  $_POST['dest']));
            $expInfos = $database->selectSpecific(['firstname, lastname, address'], "contacts", array( 'id' =>  $_POST['exp']));

            $envelope = new Envelope(
                "" . $destInfos['lastname'] ." " . $destInfos['firstname'],
                $destInfos['address'],
                "" . $expInfos['lastname'] ." " . $expInfos['firstname'],
                $expInfos['address'],
                $_POST['prio'],
                $_POST['confidential']
            );
        }
    }
    ?>
</div>
