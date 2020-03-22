<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



        $message = "Tata je krypl";
        $blacklist = array("krypl", "ocas", "Matej");

        /**
         * 
         * @param string $message
         * @param array $blacklist
         */
        function neco($message, $blacklist) {
            $str = str_replace($blacklist, "***", $message);
            echo $str . "<br>";
        }

        echo neco($message, $blacklist);
