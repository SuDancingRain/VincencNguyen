<?php

/**
 *  interface ve kterem jsou predem dane funkce ktere musi class implementovat
 */
interface iustrednyNguyen {
    /**
     * funkce ktera se musi implementovat
     */
    function getNapetiNguyen() : int ; 
    /**
     * funkce ktera se musi implementovat
     * @param float $napetiNguyen
     */
    function setNapetiNguyen(int $napetiNguyen); 
}
