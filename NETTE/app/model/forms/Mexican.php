<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mexican
 *
 * @author Dancing Rain
 */
class Mexican extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Mexican:success'));

        $this->setMethod("POST");

        $this->addText('username', 'username')
                ->setRequired(TRUE)
                ->addRule(self::PATTERN, 'Not a username', '[A-Za-z].*[A-Za-z0-9].*');
       
        $this->addPassword('password', 'password')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'At least 6 symbols long', 6);

        $this->addPassword('password2', 'password again')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Doesn\'t Match', $this['password']);

        $this->addEmail('email', 'Email')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address'); 
        
         $this->addText('name', 'name')
                ->setRequired(TRUE)
                ->addRule(self::PATTERN, 'Not a name', '.*[A-Za-z].*');
         
        $this->addText('number', 'number')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::PATTERN, 'Not a Number.', '([0-9]){9}');

        $this->addText('address', 'Address')
                ->setRequired(TRUE)
                ->addRule(self::PATTERN, 'Need an actual address', '.*[a-zA-Z]+ [0-9].*');
       
        $this->addTextArea('message', 'Details', 15, 5)
                 ->setRequired('Leave additional details or write none');
                
         $this->addUpload('upload', 'Upload')
                 ->setRequired('Give us some memes');
        
        $this->addSubmit('send', 'Send');
    
         
    }
}
