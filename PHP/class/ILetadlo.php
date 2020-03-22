<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author uzivatel
 */
interface ILetadlo {
    function setDoors($doors);
    function setLenght($lenght);
    function setType($type);
    function setModel($model);
    function setWeight($weight);
    function setSpan($span);
    function setDynamics($dynamics);
    function setColor($color);
    function getDoors();
    function getLenght();
    function getType();
    function getModel();
    function getWeight();
    function getSpan();
    function getDynamics();
    function getColor();
}
