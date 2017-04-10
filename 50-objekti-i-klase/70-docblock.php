<?php

/**
 * Klasa Covek je osnovna klasa hijerarhije ljudskih bica.
 */
class Covek
{

  /**
   * A private variable
   *
   * @var string stores name for the class
   */
  private $ime = "Damjan";

  /**
   * Gets $ime value
   *
   * @param none
   * @return string
   */
  public function getIme()
  {
      return $this->ime;
  }

  /**
   * Sets $ime to a new value
   *
   * @param string $novoIme
   * @return void
   */
  public function setIme($novoIme)
  {
      $this->ime = $novoIme;
  }
}
