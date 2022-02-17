<?php

include __DIR__  . '\database\db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

<header></header>

<div class="container">
    <?php
        foreach ($db as $disc) {
            echo 
            "<div class=\"disc-container\">
                <div class=\"img-container\"><img src=" . $disc["img"] . " alt=\"\"></div>
                <h4>" . $disc["title"] . "</h4>
                <p>" . $disc["author"] . "</p>
                <p>" . $disc["year"] . "</p>
            </div>";
        }
    ?>
</div>


</body>
</html>