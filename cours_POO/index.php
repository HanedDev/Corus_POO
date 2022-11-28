<?php

use App\CompteCourant;
use App\User;

require_once "User.php";
require_once "CompteCourant.php";

$user = new User('Gate', 'Bill', 432);


echo    "<h1> Bonjour : " . ucfirst($user->getPrenom()) . ' ' . $user->majNom() . "</h1>";


$compteC = new CompteCourant();

$compteC -> setSolde(245);

var_dump($compteC);

echo '<hr>';

echo $compteC -> getSolde ();