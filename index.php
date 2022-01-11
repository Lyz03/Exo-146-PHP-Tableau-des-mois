<?php
// part 1
$array = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

// part 2
echo $array[2] . "<br>";

// part 3
echo $array[5] . "<br>";

// part 4
$array[7] = "août";

echo $array[7] . "<br>";

// part 5
$array2 = [
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
];

// part 6
echo $array2[59] . "<br>";

// part 7
$array2[51] = "Marne";

echo $array2[51] . "<br>";

// part 8
foreach ($array2 as $value) {
    echo $value . "<br>";
}

// part 9
echo implode(' | ', $array2) . "<br>";

// part 10
foreach ($array2 as $key => $value) {
    echo "Le département " . $value . " a le numéro " . $key . "<br>";
}