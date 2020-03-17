<!DOCTYPE html>
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

$tyrex = new Tyrex();
$triceratops = new Triceratops();
$tyrex->attackSpecial($triceratops);
$tyrex->getLife();
$triceratops->getLife();
$tyrex->attackDouce($triceratops);
$tyrex->getLife();
$triceratops->getLife();
$triceratops->attackMortel($tyrex);
$tyrex->getLife();
$triceratops->getLife();

?>
<?php include '../footer.php' ?>
</body>
</html>