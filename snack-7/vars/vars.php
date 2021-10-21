<?php

$studenti = [
    [
        "nome" => "Giordano",
        "cognome" => "Rinaldi",
        "voti" => [7,8,1,3,4]
    ],
    [
        "nome" => "Stefano",
        "cognome" => "Rossi",
        "voti" => [7,9,10,3,4]
    ],
    [
        "nome" => "Lucia",
        "cognome" => "Storti",
        "voti" => [7,8,1,2,4]
    ],
    [
        "nome" => "Marco",
        "cognome" => "Neri",
        "voti" => [1,8,1,3,4]
    ],
    [
        "nome" => "Luca",
        "cognome" => "Fabbi",
        "voti" => [7,8,10,3,9]
    ],
];

var_dump($studenti[1]["voti"]);