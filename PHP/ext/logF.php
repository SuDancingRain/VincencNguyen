<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        $x = 15;

        /**
         * Makes Logarithyms from 0 to given number ($x) by base of ($a) 
         * every number given under $rule don't exist
         * @param int $x
         * @param int $a
         * @param int $rule
         * @return string
         */
        function Alpha($x, $a = 10, $rule = 0) {


            for ($index = 0; $index <= $x; $index++) {
                $y = log($index, $a);

                if ($y >= $rule) {
                    echo "Log " . $index . " = " . round($y, 2) . "<br>";
                } elseif ($y < $rule) {
                    echo "Doesn't exist<br>";
                }
            }
        }

        echo Alpha($x);
