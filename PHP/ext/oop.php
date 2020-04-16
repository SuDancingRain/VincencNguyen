<?php
/**
 * inkludovani interfacu
 * @author Vincenc nguyen
 */
include 'class/iustrednyNguyen.php'; 
/**
 * inkludovani abstraktni tridy
 * @author Vincenc nguyen
 */
include 'class/ustrednyNguyen.php';  
/**
 * inkludovani dedici tridy
 * @author Vincenc nguyen
 */
include 'class/ustrednaNguyen.php'; 

/**
 * atribut podle ktereho nastavime napeti
 * @author Vincenc nguyen
 */
$napetiNguyen = 24.3; 
/**
 * instance tridy ustrednaNguyen
 * @author Vincenc nguyen
 */
$newNguyen = new ustrednaNguyen(); 
/**
 * vypsani ve var dump constanty TYPE
 * @author Vincenc nguyen
 */
var_dump($newNguyen::TYPE); 
/**
 * nastaveni atributu pomoci instacniho pristupu k fuknci
 * @author Vincenc nguyen
 */
$newNguyen->setNapetiNguyen($napetiNguyen);      
/**
 * vypsani atributu ve var dump instancnim zpusobem
 * @author Vincenc nguyen
 */
var_dump($newNguyen->getNapetiNguyen());        