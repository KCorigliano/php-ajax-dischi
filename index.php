<?php

$db=[
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'bon jovi',
        'year' => '1988',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <?php
        foreach ($db as $disc) {
            echo 
            "<div class=\"disc-container\">
                <img src=\"\" alt=\"\">
                <h4>" . $disc["title"] . "</h4>
                <p>" . $disc["author"] . "</p>
                <p>" . $disc["year"] . "</p>
            </div>";
        }
    ?>
</div>


</body>
</html>