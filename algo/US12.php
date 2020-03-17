<?php
    require 'Database.php';
    $database = new Database();
?>
<form method="POST" id="formContact" action="">
    <h2 id="titleContact">Vos coordonnées :</h2>

    <div class="contactContent">
        <input type="text" id="nom" name="nom" placeholder="Nom" required>
        <input type="text" id="prenom" name="prenom" placeholder="prénom" required>

        <input type="date" id="birthday" name="birthday" placeholder="birthday">

        <input type="email" id="email" name="email" placeholder="Email" required>

        <input type="text" id="address" name="address" placeholder="Votre adresse">

        <input type="radio" id="male" name="sex" value="male" checked><label for="male">male</label>
        <input type="radio" id="female" name="sex" value="female"><label for="female">female</label>

    </div>

    <div id="wrapBouton">
        <input type="submit" id="envoi">
    </div>
</form>

<?php

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['birthday']) &&
    isset($_POST['address'])) {
    $user_data = array(
        'firstname' => $_POST['prenom'],
        'lastname' => $_POST['nom'],
        'birthdate' => $_POST['birthday'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
        'gender' => $_POST['sex']
    );

    $database->insertInto('contact', $user_data);
}