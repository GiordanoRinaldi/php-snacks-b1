<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
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
    <?php foreach ($db as $chiave => $valore) { ?>
        <div>
            <h1><?php echo $chiave?></h1>
            <?php foreach($valore as $insegnante){?>
                <h2> <?php echo $insegnante['name']. ' ' .$insegnante['lastname'] ?></h2>
            <?php }?>
        </div>



    <?php } ?>
</body>

<style>
    div:first-child{
        background-color: grey;
    }

    div{
        background-color: green;
    }
</style>
</html>