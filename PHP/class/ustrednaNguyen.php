<?php

// normalni trida ktera dedi predchozi abstraktni tridu
class ustrednaNguyen extends ustrednyNguyen{
    // konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
    const TYPE = 1;

   
    //funkce pro ziskani hodnoty atributu
    public function getNapetiNguyen() {
      return $this->napetiNguyen;
  }
  
//fuknce ktera nastavi hodnotu atributu
   public function setNapetiNguyen($napetiNguyen) {
      $this->napetiNguyen = $napetiNguyen;
  }
}