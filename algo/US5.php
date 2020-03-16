<?php
if (isset($_POST['one']))
    $numberOne = $_POST['one'];
if (isset($_POST['two']))
    $numberTwo = $_POST['two'];
if (isset($_POST['three']))
    $numberThree = $_POST['three'];


if (isset($numberOne) && isset($numberTwo) && isset($numberThree)) {
    $message = "";
    if ($numberOne < $numberTwo && $numberOne < $numberThree) {
        $message = "Le nombre le plus  petit est " . $numberOne . ' ';
    } elseif ($numberTwo < $numberOne && $numberTwo < $numberThree) {
        $message = "Le nombre le plus  petit est " . $numberTwo . ' ';
    } elseif ($numberThree < $numberOne && $numberThree < $numberTwo) {
        $message = "Le nombre le plus  petit est " . $numberThree . ' ';
    }else{
        $message = "il y a une égalité";
    }
}
?>

<h2>Story 5</h2>
<div class="premiumNumber">
    <h3> Nombre minimum : </h3>
    <form method="POST" action="">
        <input type="number" name="one" placeholder="Entrez un nombre">
        <input type="number" name="two" placeholder="Entrez un nombre">
        <input type="number" name="three" placeholder="Entrez un nombre">
        <input type="submit" name="Envoyer">
    </form>
    <p>
        <?php
        if (isset($message))
            echo $message;
        ?></p>
</div>