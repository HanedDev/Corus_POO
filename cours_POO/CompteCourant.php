<?php

namespace App;
use App\Compte;

require_once "Compte.php";

class CompteCourant extends Compte
{
    /**
     * Undocumented variable
     *
     * @var float
     */
    private $agios;

    /**
     * Get undocumented variable
     *
     * @return  float
     */ 
    public function getAgios()
    {
        return $this->agios;
    }

    /**
     * Set undocumented variable
     *
     * @param  float  $agios  Undocumented variable
     *
     * @return  self
     */ 
    public function setAgios(float $agios)
    {
        $this->agios = $agios;

        return $this;
    }

    public function test ($x) {
        return $x*3 ;
    }
}