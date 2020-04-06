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

        $this->setMethod("GET");

        $this->addText('username', 'username')
                ->setRequired(TRUE)
                ->addRule(self::PATTERN, 'Not a username', '[A-Za-z].*[A-Za-z0-9].*');
        
        $this->addText('name', 'name')
                ->setRequired(TRUE)
                ->addRule(self::PATTERN, 'Not a name', '.*[A-Za-z].*');
        
        $this->addPassword('password', 'password')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'At least 6 symbols long', 6);

        $this->addPassword('password2', 'password again')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Doesn\'t Match', $this['password']);

        $this->addEmail('email', 'Email')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address'); 
        
        $this->addText('number', 'number')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::INTEGER, 'Not a Number.');
/*
        $this->addText('address', 'Address')
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);
           
        $this->addCheckboxList('pets', 'Pets?', array('dog', 'cat', 'bird', 'fish', 'bunny', 'reptile ', 'other'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addText('questionPets', 'specify')
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('cook', 'Can you cook', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('bloodType', 'Blood Type', array('A', 'B', '0', 'A/B', 'Don\'t know'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('guns', 'Can you shoot a gun', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('bow', 'Can you shoot an arrow and a bow', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('sing', 'Can you sing', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('dance', 'Can you dance', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('craft', 'Can you craft', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addRadioList('play', 'Can you play an instrument', array('yes', 'no'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addCheckboxList('instruments', 'instruments', array('guitar', 'drums', 'piano', 'violin', 'trombone', 'trumpet ', 'other', 'none'))
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addText('questionInstruments', 'specify')
                ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);

        $this->addTextArea('message', 'Details', 40, 6)
                 ->setRequired(TRUE)
                ->addRule($validator, $errorMessage, $arg);
        * 
         */
        $this->addSubmit('send', 'Send');
    
         
    }
}
