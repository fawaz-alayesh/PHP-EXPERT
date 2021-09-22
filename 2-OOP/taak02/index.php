<?php

class auto{
    public $merk;
    public $kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
}

$nieuweAuto = new auto();
$nogEenAndereAuto = new auto();

$nieuweAuto->merk='Tesla';
$nieuweAuto->kleur='Rood';
$nieuweAuto->type='model 3';
$nieuweAuto->uitvoering='cabrio';
$nieuweAuto->brandstof='elektrisch';

echo $nieuweAuto->merk."<br>";
echo $nieuweAuto->kleur."<br>";
echo $nieuweAuto->type."<br>";
echo $nieuweAuto->uitvoering."<br>";
echo $nieuweAuto->brandstof."<br>";

?>