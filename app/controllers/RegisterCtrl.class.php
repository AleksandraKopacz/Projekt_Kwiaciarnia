<?php

namespace app\controllers;

use core\App;

class RegisterCtrl
{
    public function action_register()
    {
        App::getSmarty()->assign("page_title", "Zarejestruj się");
        App::getSmarty()->display('Register.tpl');
    }
}