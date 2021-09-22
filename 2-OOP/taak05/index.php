<?php

class Lamp{
    public $kleur;
    public $helderheid;
    public $isAan;
    public function setStatus($status){
        if($this->isAan == "true"){
            $status="Lamp is aan";
            return $status."<br>";
        }else{
            $status="Lamp is uit";
            return $status."<br>";
        }
    }
}

$woonkamerLamp = new Lamp();

$woonkamerLamp->kleur="geel";
$woonkamerLamp->helderheid="zacht";
$woonkamerLamp->isAan="true";
echo $woonkamerLamp->setStatus("aan");



$keukenLamp = new Lamp();

$keukenLamp->kleur="wit";
$keukenLamp->helderheid="vel";
$keukenLamp->isAan="false";
echo $keukenLamp->setStatus("uit");

?>