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

    public function actionForgotPassword($email) {
        $emails = ['su.dancing.rain@gmail.com','arckillerx@gmail.com'];
        foreach ($emails as $emailss) {
            $mail = new \Nette\Mail\Message();
            $mail->setFrom($email);
            $mail->addTo($emailss);
            $mail->setSubject('New Password');
            $mail->setBody('Your new password is ' . $password = rand(5, 15));

            $mailer = new \Nette\Mail\SmtpMailer(['host' => 'smtp.gmail.com',
                'username' => 'vincenc.nguyen',
                'password' => 'Eclipse27',
                'secure' => 'ssl',]);

            $this->flashMessage('Message sent');
            $this->getPresenter()->redirect("Sign:Success");
        }
    }

    public function actionSuccess() {
        
    }

}
