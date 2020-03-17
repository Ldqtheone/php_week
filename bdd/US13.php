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
<table>
    <thead>
        <tr>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Email </th>
            <th> Adresse </th>
            <th> Sexe </th>
            <th> Naissance </th>
        </tr>
    </thead>
    <?php
    $contacts = $database->selectAll('contacts');
    foreach ($contacts as $contact) { ?>
    <tbody>
        <tr>
            <td><?= $contact['firstname']; ?></td>
            <td><?= $contact['lastname']; ?></td>
            <td><?= $contact['mail']; ?></td>
            <td><?= $contact['address']; ?></td>
            <td><?= $contact['gender']; ?></td>
            <td><?= $contact['birthdate']; } ?></td>
        </tr>
    </tbody>
</table>
<?php include '../footer.php' ?>
</body>
</html>