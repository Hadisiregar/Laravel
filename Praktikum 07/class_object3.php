<?php
class BMI
{
    public $beratBadan, $tinggiBadan;

    public function hitungBMI()
    {
        return $this->beratBadan / ($this->tinggiBadan * $this->tinggiBadan);
    }

    public function cekStatusBeratbadan()
    {
        if($this->hitungBMI() < 18.5) {
            return "Kekurangan berat badan";
        }elseif($this->hitungBMI() >= 18.5 && $this->hitungBMI() <= 24.9){
            return "Normal";
        }elseif($this->hitungBMI() >= 25 && $this->hitungBMI() <= 29) {
            return "Kelebihan berat badan";

        }elseif($this->hitungBMI() >= 30 ){
            return "obesitas";
        }
        
    }

}
$objectBMI =new BMI;
$objectBMI->beratBadan = 62;
$objectBMI->tinggiBadan = 1.7;
echo round ($objectBMI->hitungBMI());