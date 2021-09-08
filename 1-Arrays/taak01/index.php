<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "Taak01" ?></title>
</head>
<body>
    <style>
        body{
            color:black;
            font-family: 'new times';
            font-size: 20px;
        }
        </style>
    <?php
    $medewerker = [
        [
         'voornaam' => 'Fawaz',
         'achternaam' => 'Alayesh',
         'functie' => 'Software developer'
        ],
        [
            'voornaam' => 'Willem',
            'achternaam' => 'van Oranje',
            'functie' => 'Koning'
        ]
    ];

    $frisdrink =[
        'naam' => 'sinaasappelsap',
        'merk' => 'geen voorkeur',
        'hoeveelheid' => '1 liter'
    ];

    echo $medewerker[0]['voornaam']." ".$medewerker[0]['achternaam']." is een ".$medewerker[0]['functie']."<br>";
    
    echo $medewerker[1]['voornaam']." ".$medewerker[1]['achternaam']." is een ".$medewerker[1]['functie']."<br>";
    ?>
</body>
</html>
