
<?php

/**
 * abstraktni trida ktera se neda instancovat a implementuje interface
 * @author Vincenc nguyen
 */

abstract class ustrednyNguyen implements iustrednyNguyen{
 /**
  *atribut ktery je pristupny jen ve tride a tridach dedicich
  * @author Vincenc nguyen
  * @var type 
  */
    protected $napetiNguyen; 
  
  /**
   *funkce pro ziskani hodnoty atributu implementovana z interfacu
   * @author Vincenc nguyen
   * @return int
   */
  
    function getNapetiNguyen() :int {
      return $this->napetiNguyen;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @author Vincenc nguyen
   * @param int $napetiNguyen
   */
   
  function setNapetiNguyen(int $napetiNguyen) {
      $this->napetiNguyen = $napetiNguyen;
  }




}