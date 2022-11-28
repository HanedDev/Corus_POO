<?php

namespace App;

class User
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $nom;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $prenom;

    /**
     * Undocumented variable
     *
     * @var int
     */
    private $age;


    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * Get undocumented variable
     *
     * @return  string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $nom  Undocumented variable
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $prenom  Undocumented variable
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set undocumented variable
     *
     * @param  int  $age  Undocumented variable
     *
     * @return  self
     */
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function majNom()
    {
        return ucfirst($this->nom);
    }
}
