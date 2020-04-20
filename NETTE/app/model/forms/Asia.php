<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Asia
 *
 * @author Dancing Rain
 */
class Asia extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Asia:success'));

        $this->setMethod("POST");

        $this->addText('username', 'Username')
                ->setRequired('Accounts are safe')
                ->addRule(self::PATTERN, 'Not a username', '[A-Za-z].*[A-Za-z0-9].*');

        $this->addPassword('password', 'Password')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'At least 6 symbols long', 6);

        $this->addPassword('password2', 'Password again')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Doesn\'t Match', $this['password']);

        $this->addEmail('email', 'Email')
                ->setRequired(' email is needed')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address');
        
        $this->addEmail('email2', 'Confirm Email')
                ->setRequired('confirm email is needed')
                ->addRule(self::EQUAL, 'Doesn\'t Match', $this['email']);

        $this->addText('name', 'Name')
                ->setRequired('We can\'t call you boy')
                ->addRule(self::PATTERN, 'Not a name', '.*[A-Za-z].*');

        $this->addText('number', 'Number')
                ->setRequired('Got to call when it arrives')
                ->addRule(\Nette\Forms\Form::PATTERN, 'Not a Number.', '([0-9]){9}');

        $this->addText('address', 'Address')
                ->setRequired('Need address to deliver douche')
                ->addRule(self::PATTERN, 'Need an actual address', '.*[a-zA-Z]+ [0-9].*');

        $this->addRadioList('time', 'Time', ['Morning' => 'Morning', 'Afternoon' => 'Afternoon', 'Evening' => 'Evening'])
                ->setRequired('Give us the Time boss')
                ->getSeparatorPrototype()->setName('Time');

        $this->addRadioList('deliverySpeed', 'Delivery Speed', ['normal' => 'normal', 'express' => 'express'])
                ->setRequired('How fast you need me boss ??')
                ->getSeparatorPrototype()->setName('Meal');

        $this->addSelect('rice', 'Rice', ['1 KG' => '1 KG', '2 KG' => '2 KG', '5 KG' => '5 KG'])
                ->setRequired('Choose how much you need')
                ->setPrompt('Choose amount');

        $this->addSelect('noodles', 'Noodles', ['1 pack' => '1 pack', '5 pack' => '5 pack', '10 pack' => '10 pack'])
                ->setRequired('Choose how much you need')
                ->setPrompt('Choose amount');

        $this->addSelect('broth', 'Broth', ['1.5 liters' => '1.5 liters', '3 liters' => '3 liters', '5 liters' => '5 liters'])
                ->setRequired('Choose how much you need')
                ->setPrompt('Choose amount');

        $this->addSelect('steamedBuns', 'SteamedBuns', ['5' => '5', '10' => '10', '20' => '20'])
                ->setRequired('Choose how much you need')
                ->setPrompt('Choose amount');
        
        $this->addSelect('mochi', 'Mochi', ['10'=>'10','20'=>'20','40'=>'40','80'=>'80'])
                ->setRequired('Choose how much you need')
                ->setPrompt('Choose amount');
        
        $this->addRadioList('payment', 'Payment', ['Cash' => 'Cash', 'Card' => 'Card'])
                ->setRequired('Choose if you want cheese')
                ->getSeparatorPrototype()->setName('Cheese');
                
        $this->addTextArea('message', 'Details', 15, 5)
                ->setRequired('Leave additional details or write none')
                ->addRule(self::MAX_LENGTH, 'Too many characters', 50);

        $this->addUpload('upload', 'Upload')
                ->setRequired('Give us some memes')
                ->addRule(self::IMAGE, 'It\'s not an Image');

        $this->addCheckbox('verification', 'Verification you not bot')
                ->setRequired('Got to check if you not bot');

        $this->addSubmit('send', 'Send');
    }

}
