<?php 
require __DIR__ . '/../vendor/autoload.php';

use Sarahheanan\PlentificCodingChallengeLibrary\RetrieveUsers;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plentific Coding Challenge Implementation</title>
</head>

<body>

    <h1>Plentific Coding Challenge Implementation</h1>
    <?php
        $users = new RetrieveUsers();
        $users->testPackage();
    ?>

</body>
</html>