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

        $this->addRadioList('time', 'Time', ['breakfeast' => 'breakfeast', 'lunch' => 'lunch', 'dinner' => 'dinner'])
                ->setRequired('Give us the Time boss')
                ->getSeparatorPrototype()->setName('Time');

        $this->addRadioList('meal', 'Meal', ['burrito' => 'burrito', 'tortila' => 'tortila'])
                ->setRequired('Give us the Meal boss')
                ->getSeparatorPrototype()->setName('Meal');

        $this->addSelect('meats', 'Meats', ['Beef' => 'Beef', 'Chicken' => 'Chicken', 'Pork' => 'Pork'])
                ->setRequired('Choose Meats')
                ->setPrompt('Choose Meats');

        $this->addSelect('veggies', 'Veggies', ['Cabbage' => 'Cabbage', 'Carrot' => 'Carrot'])
                ->setRequired('Choose Veggies')
                ->setPrompt('Choose Veggies');

        $this->addSelect('sauce', 'Sauce', ['Spicy' => 'Spicy', 'Garlic' => 'Garlic', 'Tomato' => 'Tomato'])
                ->setRequired('Choose Sauce')
                ->setPrompt('Choose Sauce');

        $this->addSelect('sides', 'Sides', ['Fries' => 'Fries', 'Baked Poatatoes' => 'Baked Poatatoes', 'Onion Rings' => 'Onion Rings'])
                ->setRequired('Choose Sides')
                ->setPrompt('Choose Sides');
        
        $this->addSelect('drinks', 'Drinks', ['Soda'=>'Soda','Water'=>'Water','Juice'=>'Juice','Alcohol'=>'Alcohol'])
                ->setRequired('Choose Drink')
                ->setPrompt('Choose Drink');
        
        $this->addRadioList('cheese', 'Cheese', ['Yes' => 'Yes', 'No' => 'No'])
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
