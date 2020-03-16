<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title> Exercice 1</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
    <H1>Liste des membres du groupe :</H1>
    <p>- Antony Correia</p>
    <p>- Brian Lecarpentier</p>
    <p>- Roman Clavier</p>
    <p>- Corentin Vallois</p>
</div>
<div class="nbDone">
    <H2> Number Done : </H2>
    <p>3</p>
</div>
<div class="nbUndone">
    <h2>Number Undone :</h2>
    <p>13</p>
</div>
<div class="storyDone">
    <H2> Stories Done : </H2>
    <p> Story 1 </p>
    <p> Story 2 </p>
    <p> Story 3 </p>
</div>
<div class="storyToDO">
    <h2> Stories Done : </h2>
    <p> Toutes sauf 1 - 2 - 3</p>
</div>
<?php include 'exercice.php' ?>
<?php  include 'footer.php' ?>
</body>
</html>