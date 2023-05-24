<?php
class Mamalia
{
    public $namaHewan;
    public $warnaHewan;
    public $habitatHewan;
    public $makanan;

    function menyusui()
    {
        return "$this->namaHewan adalah hewan menyusui";
    }
    
    function beranak()
    {
        return "$namaHewan adalah hewan yang melahirkan";
    }

    function makan()
    {
        return "$this->namaHewan suka makan $makanan";
    }
}
$object = new Mamalia();
$object ->namaHewan = "Kucing";
$object ->warna = "coklat";
$object ->habitat = "Sekitar Manusia";
$object ->makanan = "Wiskhas";
echo $object->menyusui();