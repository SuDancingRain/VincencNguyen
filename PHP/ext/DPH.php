<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$price = 32542.43;

       /**
        * get Price after adding DPH
        * @param type $price
        * @return type
        */
        function DPHprice($price) {

            $dph = $price + $price * 0.1736;
            $finalprice = round($dph, $precision = 2);
            return $finalprice;
        }

        echo DPHprice($price);
