<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Presenters;
/**
 * Description of SignNguyenPresenter
 *
 * @author Dancing Rain
 */
class SignPresenter extends \Nette\Application\UI\Presenter {
    
    public function createComponentSign($name) {
        return new \Sign($this, $name);
    }
    
    
    public function actionForgotPassword(){
        
    }
    
    public function actionSuccess(){
        
    }
            
            
    }
