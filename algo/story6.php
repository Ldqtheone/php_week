<h2>Story 6</h2>
<div class="romanNumber">
    <h3> Nombre Romain : </h3>
    <form id="formStory6" method="POST" action="">
        <input type="number" name="number" placeholder="Entrez un nombre maximum 4999">
        <input type="submit" name="Envoyer" value="formStory3">
    </form>
    <p>
        <?php
            if (!empty($_POST))
            {
                $algorithmie->converterRomanNumber($_POST["number"]);
            }
        ?>
    </p>
</div>