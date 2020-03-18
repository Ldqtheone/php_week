<?php
    require 'Database.php';
    $database = new Database("php_week");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>¤ TP Reco ~ BDD Users ¤</title>
    </head>
    <body>
        <?php include '../header.php' ?>
        <main class="story">
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
                <tbody>
                <?php
                $contacts = $database->selectAll('contacts');
                foreach ($contacts as $key => $contact) { ?>
                    <tr class="contactLine" <?php (string)($key % 2) ?>>
                        <td><?= $contact['firstname']; ?></td>
                        <td><?= $contact['lastname']; ?></td>
                        <td><?= $contact['mail']; ?></td>
                        <td><?= $contact['address']; ?></td>
                        <td><?= $contact['gender']; ?></td>
                        <td><?= $contact['birthdate']; } ?></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <?php include '../footer.php' ?>
    </body>
</html>
