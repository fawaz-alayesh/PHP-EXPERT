<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"Taak02" ?></title>
</head>
<body>
    <?php 

    $medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ],
  [
    'voornaam' => 'Homer',
    'achternaam' => 'Simpson',
    'functie'  => 'fabrieksarbeider'
  ],
  [
    'voornaam' => 'Johan',
    'achternaam' => 'Cruyff',
    'functie'  => 'voetbalicoon'
  ]
  ,
  [
    'voornaam' => 'Badr',
    'achternaam' => 'Hari',
    'functie'  => 'Kickboxer'
  ]
  ,
  [
      'voornaam' => 'Fawaz',
      'achternaam' => 'Alayesh',
      'functie' => 'Software developer'
  ]
];

for($i=0; $i<count($medewerkers); $i++){
 echo $medewerkers[$i]['voornaam']." ".$medewerkers[$i]['achternaam']." is een ". $medewerkers[$i]['functie']."<br>";
}
    
?>
</body>
</html>