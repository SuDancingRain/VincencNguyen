<?php

declare(strict_types=1);

/**
 *  normalni trida ktera dedi predchozi abstraktni tridu
 */
class ustrednaNguyen extends ustrednyNguyen {

    /**
     *  konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
     */
    const TYPE = 1;

    /**
     * fuknce ktera nastavi hodnotu atributu
     * @param int $napetiNguyen
     */
    public function setNapetiNguyen(int $napetiNguyen) {
        $this->napetiNguyen = $napetiNguyen;
    }

    /**
     * funkce pro ziskani hodnoty atributu
     * @return int
     */
    public function getNapetiNguyen(): int {
        return $this->napetiNguyen;
    }

}
