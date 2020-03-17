<?php
require 'Database.php';
$database = new Database("php_week");
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Base de données </title>
</head>
<body>
<?php include '../header.php' ?>
<h2 id="titleContact">Mes contacts :</h2>

<?php

$contacts = $database->selectAll('contacts');

//var_dump($contacts);

foreach ($contacts as $contact){
    echo $contact['firstname'] . " " . $contact['lastname'] . " habite au : " . $contact['address'] . ".<br/>";
    echo "C'est un : " . $contact['gender'] . " et il est né le : " . $contact['birthdate'] . ".<br/>";
    echo "Son addresse email est : " . $contact['mail'] . ".<br/><br/>";
} ?>
<?php include '../footer.php' ?>
</body>
</html>