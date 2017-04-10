<?php

class Covek
{
  protected $ime = "Damjan";

  public function zdravo()
  {
      echo "Dobar dan.\n";
  }

  public function kaziIme()
  {
      echo "Moje ime je " . $this->ime . "\n";
  }
}

class Vojnik extends Covek
{
  public function zdravo()
  {
      echo "Vojnicki pozdrav!\n";
  }
}

$borac = new Vojnik;
$borac->zdravo();
$borac->kaziIme();
