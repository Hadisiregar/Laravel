<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;
    
    function hitungVolume(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$objekBalok = new Balok;
$objekBalok->panjang = "20";
$objekBalok->lebar = "13";
$objekBalok->tinggi = "15";
echo $objekBalok->hitungVolume();