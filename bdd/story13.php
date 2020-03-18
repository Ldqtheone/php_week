<?php
    require 'Database.php';
    $database = new Database("php_week");
?>

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
        foreach ($contacts as $key => $contact)
        { ?>
            <tr>
                <td><?= $contact['firstname']; ?></td>
                <td><?= $contact['lastname']; ?></td>
                <td><?= $contact['mail']; ?></td>
                <td><?= $contact['address']; ?></td>
                <td><?= $contact['gender']; ?></td>
                <td><?= $contact['birthdate']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
