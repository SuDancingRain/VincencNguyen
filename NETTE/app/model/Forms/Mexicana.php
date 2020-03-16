<?php

class Mexicana extends \Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Mexicana:success'));

        $this->setMethod("POST");

        $this->addText('name', 'name')
                ->setRequired('we need that info');

        $this->addPassword('password', 'password')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'At least 6 symbols long', 6);

        $this->addPassword('password2', 'password again')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Doesn\'t Match', $this['password']);

        $this->addEmail('email', 'Email')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address');

        $this->addText('number', 'number')->setRequired('Number needed')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Not a Number.');
        
        $this->addRadioList('food', 'Food', array('tortila', 'quasadila', 'burito'));

        $this->addCheckboxList('fillings', 'Fillings', array('Cheesse', 'Beef', 'Pork','Chicken', 'Beans', 'Chilli Sauce','Garlic Sauce','Herb Sauce'));

        $this->addTextArea('message', 'Details', 40, 6);
       
        $this->addSelect('delivery', 'Pick up here or delivered', array('Pick up', 'Deliver'));
        
        $this->addUpload('Upload');
        
        $this->addSubmit('send', 'Send');
        
       
        
    }

}
