<?php

$db=[
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'new jersey',
        'img' => '',
        'author' => 'Bon Jovi',
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
</head>
<body>
    <p></p>
<?php
    foreach ($db as $disc) {
        echo 
        "<div>
            <img src=\"\" alt=\"\">
            <h4>" . $disc["title"] . "</h4>
            <p>" . $disc["author"] . "</p>
            <p>" . $disc["year"] . "</p>
        </div>";
    }
?>


</body>
</html>