<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        /* vlozena podminka */
        $a = 6;
        $b = 5;
        if ($a == $b) {
            echo "je rovno";

            if ($a > $b) {
                echo "podminka funguje";
            }
        } elseif ($a != $b) {
            echo "podminka nefunguje";
        } else {
            echo "nic nefunguje";
        }
