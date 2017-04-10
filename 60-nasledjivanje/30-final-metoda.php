<?php

class Covek
{
  // final metoda se ne moze redefinisati
  final public function zdravo()
  {
      echo "Dobar dan.\n";
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
$borac->zdravo(); // izbacuje gresku jer pokusava da redefinise roditelja
