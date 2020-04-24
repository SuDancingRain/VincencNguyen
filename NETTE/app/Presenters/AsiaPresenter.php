<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of AsiaPresenter
 *Formular na eshop s asijskymi prisadami
 * @author Dancing Rain
 */
class AsiaPresenter extends \Nette\Application\UI\Presenter{
   
     public function createComponentAsia($name) {
        return new \Asia($this, $name);
    }
 
    
    public function actionSuccess(){
       $params = $this->getRequest();
        $this->template->params = $params->post;
        
    }
}
