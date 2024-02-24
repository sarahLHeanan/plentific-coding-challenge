<?php 
require __DIR__ . '/../vendor/autoload.php';

use Sarahheanan\PlentificCodingChallengeLibrary\User;
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
    <span><b>Status:</b></span>
    <?php
        $user = new User();
        $user->testPackage() ?? 'package has not loaded';
    ?>

    <h2>Demo GetUser() method</h2>

    <?php
        // demo get user method
        $user = $user->getUser(1);
        var_dump($user);
    ?>

</body>
</html>
