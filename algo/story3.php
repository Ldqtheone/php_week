<h2>Story 3</h2>
<div class="premiumNumber">
    <h3> Nombre premier : </h3>
    <form id="formStory3" method="POST" action="">
        <input type="number" name="number" placeholder="Entrez un nombre premier">
        <input type="submit" name="submitStory3" value="Envoyer">
    </form>
    <p>
        <?php
        if (!empty($_POST) && $_POST["submitStory3"] === "Envoyer")
        {
            $algorithmie->getPrimaryNumber($_POST['number']);
        }
        ?>
    </p>
</div>
