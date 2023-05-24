<?php
class Persegi
{
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}
$object = new Persegi(7);
echo $object->hitungLuas();