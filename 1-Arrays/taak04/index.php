<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];
for($i = 0 ; $i < count($speelgoed); $i++){
    echo "Speelgoed " .$speelgoed[$i]['naam']. " uit de categorie ".$speelgoed[$i]['soort']." kost ". $speelgoed[$i]['prijs'] ."<br>";
    }

$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

foreach($games as $value => $key){
    echo "Speelgoed " .$key['naam'] . " van uitgever ".$key['uitgever'] ." kost ". $key['prijs'] ."<br>";
  
}