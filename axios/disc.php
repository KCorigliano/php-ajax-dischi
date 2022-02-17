<?php

$db=[
    [
        'title' => 'new jersey',
        'img' => './img/new_jersey.jpg',
        'author' => 'Bon Jovi',
        'year' => '1988',
    ],
    [
        'title' => 'live at wembley',
        'img' => '.\img\live_at_wembley_86.jpg',
        'author' => 'Queen',
        'year' => '1992',
    ],
    [
        'title' => 'ten\'s summoner\'s tales',
        'img' => '.\img\ten_summoner\'s_tales.jpg',
        'author' => 'Sting',
        'year' => '1993',
    ],
    [
        'title' => 'steve gadd band',
        'img' => '.\img\steve_gadd_band.jfif',
        'author' => 'Steve Gadd Band',
        'year' => '2018',
    ],
    [
        'title' => 'brave new world',
        'img' => '.\img\brave_new_world.jpg',
        'author' => 'Iron Maiden',
        'year' => '2000',
    ],
    [
        'title' => 'one more car, one more rider',
        'img' => '.\img\one_more_car_one_more_rider.jfif',
        'author' => 'Eric Clapton',
        'year' => '2002',
    ],
    [
        'title' => 'made in japan',
        'img' => '.\img\made_in_japan.jpg',
        'author' => 'Deep Purple',
        'year' => '1972',
    ],
    [
        'title' => 'and justice for all',
        'img' => '.\img\and_justice_for_all.jfif',
        'author' => 'Metallica',
        'year' => '1988',
    ],
    [
        'title' => 'hard wired',
        'img' => '.\img\hard_wired.jfif',
        'author' => 'Dave Weckl',
        'year' => '1994',
    ],
    [
        'title' => 'bad',
        'img' => '.\img\bad.jpg',
        'author' => 'Micheal Jackson',
        'year' => '1987',
    ],
];

header('Content-Type: application/json');

echo json_encode($db);

?>