<?php

$provincies = [
[
    'provincie' => 'Groningen',
    'hoofdstad' => 'Groningen',
    'bevolking' => 585.866,
    'inwoners_gemeente' =>  232.652,
],
[
    'provincie' => 'Friesland',
    'hoofdstad' => 'Leeuwarden',
    'bevolking' => 649.957,
    'inwoners_gemeente' =>  124.639,
],
[
    'provincie' => 'Drenthe',
    'hoofdstad' => 'Assen',
    'bevolking' => 493.682,
    'inwoners_gemeente' =>  107.263,
],
[
    'provincie' => 'Overijssel',
    'hoofdstad' => 'Zwolle',
    'bevolking' => 1.162406,
    'inwoners_gemeente' =>  130.173,
],
[
    'provincie' => 'Flevoland',
    'hoofdstad' => 'Lelystad',
    'bevolking' => 423.021,
    'inwoners_gemeente' =>  80.490,
],

];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}

?>