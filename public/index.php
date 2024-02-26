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

    <h2>Demo Get() method</h2>
    <span><b>Output: </b></span>
    <?php
        $user = $user->getUser(1);
        var_dump($user);
    ?>

    <h2>Demo User List (index) method - return paginated array</h2>
    <span><b>Output: </b></span>
    <?php
        $page = 1;
        $pageSize = 2;

        $newUser = new User();
        $users = $newUser->index($page, $pageSize);

        var_dump($users);

    ?>

    <h2>Demo Create() method</h2>
    <span><b>Output: </b></span>
    <?php
        $anotherUser = new User();
        $newUser = $anotherUser->createUser(2, 'test@example.com', 'Joe', 'Bloggs', 'test avatar string');
        var_dump($newUser);
    ?>
    <p>Returned user id is: <span><?php echo $newUser; ?></p>
</body>
</html>
