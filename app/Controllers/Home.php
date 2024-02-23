<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         $this->sendTestEmail();

        if(session("magiclogin")) {
            return redirect()->to("set-password")
                             ->with("message","please update your password" );
        }
        return view('Home/index');
    }

    public function sendTestEmail()
    {
        $email = \Config\Services::email();

        



$email->setTo('ggg@gmail.com');

$email->setSubject('Email Test' .date('y-m-d h:i:s'));
$email->setMessage('sadiya');


        if($email->send()) {
            echo "Email Sent";
        }
        else {
            echo "not";
        }
    }
}
