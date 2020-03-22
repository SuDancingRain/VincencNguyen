<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



        $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December");
        $int = 12;

        /**
         * Return month by its ID value
         * @param int $int
         * @param array $months
         * @return string
         */
        function getmonth($int, $months) {

            return $months[$int];
        }

        /**
         * Return month by its ID value
         * @param int $int
         * @param array $months
         * @return string
         */
        function getmonth2($int, $months) {

            foreach ($months as $key => $value) {
                if ($key == $int) {

                    return $value;
                }
            }
        }

        echo getmonth($int, $months);

        echo getmonth2(3, $months);
