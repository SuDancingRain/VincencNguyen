<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignNguyenPresenter
 *
 * @author Dancing Rain
 */
class SignNguyenPresenter extends Nette\Application\UI\Presenter {
    
    public function createComponentSignNguyen($name) {
        return new \SignNguyen($this, $name);
    }
    
    
    public function actionForgotPasswordNguyen(){
        
    }
}
