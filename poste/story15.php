<div class="story">
    <form method="POST" id="formLetter" action="#">
        <h2 id="titleContact">Vos coordonnées :</h2>

        <div class="contactContent">
            <?php
            $contacts = $database->selectAll('contacts');
            if(!empty($contacts)) {
                foreach ($contacts as $key => $contact) {
                    $nameDest[$contact['id']] = $contact['firstname'] . ' ' . $contact['lastname'];
                }
                $tools->createSelect("dest", $nameDest, "Choisissez le nom de votre destinataire ");
                echo "<br/>";

                $tools->createSelect("exp", $nameDest, "Choisissez le nom de votre expediteur ");
                echo "<br/>";

                $tools->createInput("checkbox", "prio", "Timbre prioritaire");
                $tools->createInput("checkbox", "confidential", "Confidentiel");

            }
            else{
                echo "Aucun contact disponible dans la base de données";
            }
            ?>
        </div>
        <div class="contactContent">
            <h2>Votre lettre :</h2>
            <?php
            $tools->createTextArea("letter", 15, 45, "Votre lettre ici", true);
            $tools->createInput("submit", "submitLetter", null, null, "Send", true);
            ?>
        </div>
    </form>

    <?php
    if (isset($_POST['submitLetter']) ) {
        if($_POST['dest']===$_POST['exp']){
            echo"<script>alert('Le destinataire doit être different de l\'expéditeur')</script>";
        }else{
            $destInfos = $database->selectSpecific(['firstname, lastname, address,city ,postal'], "contacts", array( 'id' =>  $_POST['dest']));
            $expInfos = $database->selectSpecific(['firstname, lastname, address,city ,postal'], "contacts", array( 'id' =>  $_POST['exp']));
            
            $envelope = new Postal(
                "" . $destInfos['lastname'] ." " . $destInfos['firstname'],
                $destInfos['address'], $destInfos['city'], $destInfos['postal'],
                "" . $expInfos['lastname'] ." " . $expInfos['firstname'],
                $expInfos['address'], $expInfos['city'], $expInfos['postal'],
                isset($_POST['prio']) ? $_POST['prio'] = true : $_POST['prio'] = false,
                isset($_POST['confidential']) ? $_POST['confidential'] = true :
                    $_POST['confidential'] = false
        );
            $envelope->setContentLetter($_POST['letter']);
        }
    }
    ?>
</div>
