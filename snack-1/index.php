<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$squadre_basket = [
    [
        "squadra_casa" => "NBArazzanti",
        "squadra_ospite" => "Golden Shower Warriors",
        "punti_casa" => 60,
        "punti_ospite" => 88,
    ],
    [
        "squadra_casa" => "Patatinaikos",
        "squadra_ospite" => "Stalla Rossa Degrado",
        "punti_casa" => 70,
        "punti_ospite" => 99,
    ],
    [
        "squadra_casa" => "Armani Comio",
        "squadra_ospite" => "Virtus Bonobo",
        "punti_casa" => 50,
        "punti_ospite" => 19,
    ],
];

for ($i=0; $i < count($squadre_basket); $i++) {
    echo $squadre_basket[$i]["squadra_casa"] . " - " . $squadre_basket[$i]["squadra_ospite"] . " | " . $squadre_basket[$i]["punti_casa"] . " - " . $squadre_basket[$i]["punti_ospite"] . "<br>";
};