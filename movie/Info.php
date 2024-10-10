<?php
class info
{
    public string $voto;
    public string $genere;

    function __construct(string $_voto, string $_genere)
    {
        $this->voto = $_voto;
        $this->genere = $_genere;
    }

    public function getInfo()
    {
        return $this->voto . " " . $this->genere;
    }
}
