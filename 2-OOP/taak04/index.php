<?php

class scooter{
    public $kleur;
    public $merk;
    public $inhoudtank;
    public function CheckInhoud(){
        if($this->inhoudtank > 0){
            echo "De tank is niet leeg"."<br>";
        }else{
            echo"De tank is leeg"."<br>";
        }
    }
}
$piago = new scooter();

$piago->merk="piago";
$piago->kleur="rood";
$piago->inhoudtank="6"; 
$piago->CheckInhoud(); 

$peugeot = new scooter();

$peugeot->merk="peugeot";
$peugeot->kleur="zwart";
$peugeot->inhoudtank="7"; 
$peugeot->CheckInhoud();


?>