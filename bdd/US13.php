<?php
require 'Database.php';
$database = new Database("php_week");
?>

<h2 id="titleContact">Mes contactes :</h2>

<?php

$contacts = $database->selectAll('contacts');

//var_dump($contacts);

foreach ($contacts as $contact){
    echo $contact['firstname'] . " " . $contact['lastname'] . " habite au : " . $contact['address'] . ".<br/>";
    echo "C'est un : " . $contact['gender'] . " et il est né le : " . $contact['birthdate'] . ".<br/>";
    echo "Son addresse email est : " . $contact['mail'] . ".<br/><br/>";
}