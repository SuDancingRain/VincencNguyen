<?php
include 'class/iustrednyNguyen.php'; // inkludovani interfacu
include 'class/ustrednyNguyen.php'; // inkludovani abstraktni tridy
include 'class/ustrednaNguyen.php'; // inkludovani dedici tridy

$napetiNguyen = 24; // atribut podle ktereho nastavime napeti

$newNguyen = new ustrednaNguyen(); // instance tridy ustrednaNguyen

var_dump($newNguyen::TYPE); // vypsani ve var dump constanty TYPE

$newNguyen->setNapetiNguyen($napetiNguyen);     // nastaveni atributu pomoci instacniho pristupu k fuknci

var_dump($newNguyen->getNapetiNguyen());        // vypsani atributu ve var dump instancnim zpusobem