<?php

class Covek
{
  private $ime = "Damjan";

  public function getIme()
  {
      return $this->ime;
  }

  public function setIme($novoIme)
  {
      $this->ime = $novoIme;
  }
}

$osoba = new Covek; // instanciramo novi objekat
// echo $osoba->ime;  // vise ne moze ovako jer je privatno

echo "Moje ime je " . $osoba->getIme() . ".\n";

$osoba->setIme("Petar");  // postavljamo novo ime
echo "Moje novo ime je " . $osoba->getIme() . ".\n";
