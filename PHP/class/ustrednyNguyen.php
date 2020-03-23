<?php

// abstraktni trida ktera se neda instancovat a implementuje interface
abstract class ustrednyNguyen implements iustrednyNguyen{
  protected $napetiNguyen; // atribut ktery je pristupny jen ve tride a tridach dedicich
  
  //funkce pro ziskani hodnoty atributu implementovana z interfacu
    function getNapetiNguyen() {
      return $this->napetiNguyen;
  }

  //fuknce ktera nastavi hodnotu atributu implementovana z interfacu
  function setNapetiNguyen($napetiNguyen) {
      $this->napetiNguyen = $napetiNguyen;
  }




}
