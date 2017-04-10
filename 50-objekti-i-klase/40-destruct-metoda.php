<?php

class Covek
{
  private $ime = "Damjan";

  public function __construct()
  {
      echo "Nova instanca klase ", __CLASS__, " je napravljena!\n";
  }

  public function __destruct()
  {
      echo "Klasa ", __CLASS__, " je unistena.\n";
  }

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

echo "Moje ime je " . $osoba->getIme() . ".\n";

// na kraju fajla PHP automatski oslobađa sve resurse
