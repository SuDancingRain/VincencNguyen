<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $no = 1;

        /**
         * 
         * @param float $no
         * @return false
         */
        function test($no) {

            for ($no; $no <= 10; $no++) {

                echo "Test - " . $no . "<br >";
            }
            return false;
            test($no);
        }

        echo test($no);
