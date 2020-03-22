<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        echo "<table border=1>";
        for ($i = 1; $i < 15 + 1; $i++) {
            echo "<tr>";
            for ($t = 1; $t < 5 + 1; $t++) {
                echo "<td>" . $i . " - " . $t . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
