<?php
// j'appelle le fichier 'Suite.php' qui contient la classe 'Suite'
require 'Suite.php';

// je crée une instance, et je base le nouvel objet '$suite' sur la classe 'Suite()'
$suite = new Suite();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite</title>
</head>
<body>
    <h2>La suite :</h2>
    <!-- je fais appel à la méthode 'getSuite()' pour afficher le résultat -->
    <?php echo $suite->getSuite(); ?>
</body>
</html>