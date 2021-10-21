<?php 

function media($arr){
    $media = array_sum($arr) / count($arr);
    return $media;
};




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

var_dump(media($studenti[1]["voti"]));

foreach($studenti as $studente) {
    echo $stuedente;
};

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

    
    <?php 
    
    foreach($studenti as $studente) {
        echo $studente["nome"]."<br>";
        echo $studente["cognome"]."<br>";
        echo media($studente["voti"]) ."<br>";
    }
    
    ?>
    

</body>
</html>