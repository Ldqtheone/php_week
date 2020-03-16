<form method="POST" id="formContact" action="">
    <h2 id="titleContact">Vos coordonnées :</h2>

    <div class="contactContent">
        <input type="text" id="nom" name="nom" placeholder="Nom" required>
        <input type="text" id="prenom" name="prenom" placeholder="prénom" required>

        <input type="date" id="birthday" name="birthday" placeholder="birthday">

        <input type="email" id="email" name="email" placeholder="Email" required>

        <input type="number" id="postal" name="postal" placeholder="code postal">


        <input type="radio" id="male" name="sex" value="male" checked><label for="male">male</label>
        <input type="radio" id="female" name="sex" value="female"><label for="female">female</label>

    </div>

    <div id="wrapBouton">
        <input type="submit" id="envoi">
    </div>
</form>