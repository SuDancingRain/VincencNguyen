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
interface IOsobniAuto {
    function setWheel($wheel);
    function setModel($model);
    function setBrand($brand);
    function setType($type);
    function setFuel($fuel);
    function setColor($color);
    function setDoors($doors);
    function setShift($shift);
    function getWheel();
    function getModel();
    function getBrand();
    function getType();
    function getFuel();
    function getColor();
    function getDoors();
    function getShift();
    
}
