<!DOCTYPE html>
<?php
    require 'Form.php';
    $input = new Form();
?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>¤ Dino ¤</title>
    <meta name="author" content="Roman CLAVIER">
</head>
<body>
<?php include '../header.php' ?>
<?php
include 'Tyrex.php';
include 'Triceratops.php';
?>

<form method="post" action="">
    <?php
    $dinoSelect = array(
        1 => 'Tyrex',
        2 => 'Triceratops'
    );
    $genderSelect = array(
        'Male' => 'Male',
        'Femelle' => 'Femelle'
    );

    $input->createSelect('animalChoice', $dinoSelect, 'Choix du dinosaure');
    echo '<br/>';
    $input->createRadio($genderSelect, 'Choix du sex', 'gender');
    echo '<br/>';
    $input->createInput('number', "hp", null, "Combien de HP ?");
    echo '<br/>';
    $input->createInput("number", "damage", null, "Combien de dégats ?");
    echo '<br/>';
    $input->createTextarea("describe", 20, 40, "Histoire du dinosaure");
    echo '<br/>';
    $input->createInput("submit", "Envoyer", "Envoyer", null);
    ?>
</form>

<?php

if(isset($_POST['hp']) && isset($_POST['damage']) && isset($_POST['gender']) && isset($_POST['describe'])){
    if($_POST['animalChoice'] == 1) {
        $tyrex = new Tyrex($_POST['hp'], $_POST['damage'], $_POST['gender'], $_POST['describe']);
        $triceratops = new Triceratops(rand(100, 500), rand(100,500), rand(1,2), "L'ennemi le plus coriace, un vrai dragon");
    }
    else{
        $triceratops = new Triceratops($_POST['hp'], $_POST['damage'], $_POST['gender'], $_POST['describe']);
        $tyrex = new Tyrex(rand(100, 500), rand(100,500), rand(1,2), "L'ennemi le plus coriace, un vrai dragon");
    }

    $tyrex->attackSpecial($triceratops);
    $tyrex->getLife();
    $triceratops->getLife();
    $tyrex->attackDouce($triceratops);
    $tyrex->getLife();
    $triceratops->getLife();
    $triceratops->attackMortel($tyrex);
    $tyrex->getLife();
    $triceratops->getLife();
}

?>

<?php include '../footer.php' ?>
</body>
</html>