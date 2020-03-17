<h2>Story 4</h2>
<div class="timestampDate">
    <h3> Evenements passés : </h3>
    <form method="POST" action="">
        <label for="time" >Entrez un nombre de secondes</label>
        <input type="number" name="time">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
            if (!empty($_POST))
            {
                $algorithmie->dateToCheck($_POST['time']);
            }
        ?>
    </p>
</div>