<?php

class Product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dweil = new Product();
$stofzuiger = new Product();

$dweil->merk="hema";
$dweil->prijs=10;
$dweil->type="lang";
$dweil->kleur="rood";

 echo $dweil->merk."<br>";
 echo $dweil->prijs."<br>";
 echo $dweil->type."<br>";
 echo $dweil->kleur."<br>";


$stofzuiger->merk="aegon";
$stofzuiger->prijs=50;
$stofzuiger-> type="gfs505";
$stofzuiger->kleur="grijs";
echo "<br>";
echo $stofzuiger->merk."<br>";
echo $stofzuiger->prijs."<br>";
echo $stofzuiger->type."<br>";
echo $stofzuiger->kleur."<br>";


?>