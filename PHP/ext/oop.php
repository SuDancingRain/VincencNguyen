<?php
/**
 * inkludovani interfacu
 */
include 'class/iustrednyNguyen.php'; 
/**
 * inkludovani abstraktni tridy
 */
include 'class/ustrednyNguyen.php';  
/**
 * inkludovani dedici tridy
 */
include 'class/ustrednaNguyen.php'; 

/**
 * atribut podle ktereho nastavime napeti
 */
$napetiNguyen = 24.3; 
/**
 * instance tridy ustrednaNguyen
 */
$newNguyen = new ustrednaNguyen(); 
/**
 * vypsani ve var dump constanty TYPE
 */
var_dump($newNguyen::TYPE); 
/**
 * nastaveni atributu pomoci instacniho pristupu k fuknci
 */
$newNguyen->setNapetiNguyen($napetiNguyen);      
/**
 * vypsani atributu ve var dump instancnim zpusobem
 */
var_dump($newNguyen->getNapetiNguyen());        