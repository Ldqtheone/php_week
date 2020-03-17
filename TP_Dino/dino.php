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
echo "<br/>";
$triceratops = new Triceratops();
echo "<br/>";
$tyrex->attackSpecial($triceratops);
echo "<br/>";
$tyrex->getLife();
echo "<br/>";
$triceratops->getLife();
echo "<br/>";
$tyrex->attackDouce($triceratops);
echo "<br/>";
$tyrex->getLife();
echo "<br/>";
$triceratops->getLife();
echo "<br/>";
$triceratops->attackMortel($tyrex);
echo "<br/>";
$tyrex->getLife();
echo "<br/>";
$triceratops->getLife();

?>
<?php include '../footer.php' ?>
</body>
</html>