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

  static function zdravo()
  {
    echo "Zdravo Svete\n";
  }
}

Covek::zdravo();
