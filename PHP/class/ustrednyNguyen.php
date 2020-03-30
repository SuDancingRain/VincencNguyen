<?php

/**
 * abstraktni trida ktera se neda instancovat a implementuje interface
 */

abstract class ustrednyNguyen implements iustrednyNguyen{
 /**
  *atribut ktery je pristupny jen ve tride a tridach dedicich
  * @var type 
  */
    protected $napetiNguyen; 
  
  /**
   *funkce pro ziskani hodnoty atributu implementovana z interfacu
   * @return type
   */
  
    function getNapetiNguyen() {
      return $this->napetiNguyen;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @param type $napetiNguyen
   */
   
  function setNapetiNguyen($napetiNguyen) {
      $this->napetiNguyen = $napetiNguyen;
  }




}
