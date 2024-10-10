<?php
class info
{
    public $voto;
    public $genere;

    function __construct($_voto, $_genere)
    {
        $this->voto = $_voto;
        $this->genere = $_genere;
    }

    public function getInfo()
    {
        return $this->voto . " " . $this->genere;
    }
}
