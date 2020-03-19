<?php


class Envelope
{
    private $dest;
    private $exp;
    private $stamp;
    private $confidential;

    /**
     * Envelope constructor.
     * @param $dest
     * @param $exp
     * @param $stamp
     * @param $confidential
     */
    public function __construct()
    {
        $this->dest = "Nom Prenom dest";
        $this->exp = "Nom pre";
        $this->stamp = "../assets/images/timbreV.png";
        $this->confidential = $confidential;
    }


}