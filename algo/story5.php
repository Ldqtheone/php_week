<h2>Story 5</h2>
<div class="minNumber">
    <h3> Nombre minimum : </h3>
    <form method="POST" action="#">
        <input type="number" name="one" placeholder="Entrez un nombre">
        <input type="number" name="two" placeholder="Entrez un nombre">
        <input type="number" name="three" placeholder="Entrez un nombre">
        <input type="submit" name="Envoyer">
    </form>

    <p>
        <?php
            if (!empty($_POST))
            {
                $algorithmie->getMin($_POST["one"], $_POST["two"], $_POST["three"]);
            }
        ?>
    </p>
</div>