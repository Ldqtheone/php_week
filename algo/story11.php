<?php
include 'SecondSort.php' ?>

<h2>Story 11</h2>
<div class="arraySort">
    <h3> Tri du tableau : </h3>
    <form method="POST" action="">
        <input type="text" name="nameTab" placeholder="Entrez des noms séparés par une virgule">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php

        $sortArray = new SecondSort();

        if (isset($_POST['nameTab']))
            $sortArray->getNames($_POST['nameTab']);
        ?></p>
</div>