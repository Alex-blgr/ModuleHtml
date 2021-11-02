<?php 
var nom = "mon blaze";
if (isset($nom) && !empty($nom)) {
    return $nom;
}


// var_dump($nom);
// echo ("<h1>je m'appelle " .$nom."</h1>");




?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="utf-8" />
</head>

<body>

<h1>resultat</h1>

<p>info </p>
Bienvenue Monsieur : <h1><?= htmlspecialchars($nom); ?></h1>
</body>
</html>