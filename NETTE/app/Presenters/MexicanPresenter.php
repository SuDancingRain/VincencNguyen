<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of MexicanPresenter
 *
 * @author Dancing Rain
 */
class MexicanPresenter extends \Nette\Application\UI\Presenter{
    public function renderMexican() {
        
    }
     public function createComponentMexican($name) {
        return new \Mexican($this, $name);
    }
 
    
    public function renderSuccess(){
       // var_dump($this->getRequest()->getParameters());
       // die;
      $this->template->params = $this->getRequest()->getParameters();
        
    }
}
