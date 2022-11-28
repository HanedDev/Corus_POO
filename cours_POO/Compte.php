<?php

namespace App;

use DateTime;

abstract class Compte
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $user;

    /**
     * Undocumented variable
     *
     * @var float
     */
    private $solde;

    /**
     * Undocumented variable
     *
     * @var DateTime
     */
    private $date_creation;



    /**
     * Get undocumented variable
     *
     * @return  string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $user  Undocumented variable
     *
     * @return  self
     */
    public function setUser(string $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set undocumented variable
     *
     * @param  float  $solde  Undocumented variable
     *
     * @return  self
     */
    public function setSolde(float $solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  DateTime
     */
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set undocumented variable
     *
     * @param  DateTime  $date_creation  Undocumented variable
     *
     * @return  self
     */
    public function setDate_creation(DateTime $date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function test ($x) {
        return $x*2 ;

    }
}
