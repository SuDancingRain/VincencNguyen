<?php
declare(strict_types=1);
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
  * fuknce ktera nastavi hodnotu atributu
  * @param int $napetiNguyen
  */
   
  function setNapetiNguyen(int $napetiNguyen)  {
      $this->napetiNguyen = $napetiNguyen;
  }
  
  /**
     * funkce pro ziskani hodnoty atributu
     * @return int
     */
    function getNapetiNguyen() : int {
      return $this->napetiNguyen;
  }




}
