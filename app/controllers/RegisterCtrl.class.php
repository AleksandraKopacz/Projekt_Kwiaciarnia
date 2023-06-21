<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Utils;

class RegisterCtrl
{
    private $form;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function action_registerShow()
    {
        $this->generateView();
    }

    public function validate()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login))
            return false;
        if (empty($this->form->login))
            Utils::addErrorMessage('Nie podano loginu');
        if (empty($this->form->pass))
            Utils::addErrorMessage('Nie podano hasła');
        if (App::getMessages()->isError())
            return false;
        $where = ["email" => $this->form->login];
        $this->form->user = App::getDB()->get("uzytkownik", [
            "rola"
        ], $where);
        if (empty($this->form->user)) {
            $this->form->user = App::getDB()->insert("uzytkownik", [
                "email" => $this->form->login,
                "haslo" => $this->form->pass,
                "rola" => 0
            ]);
        } else {
            Utils::addErrorMessage('Użytkownik o takim adresie e-mail już istnieje');
        }
        return !App::getMessages()->isError();
    }

    public function action_register()
    {
        if ($this->validate()) {
            Utils::addInfoMessage('Zarejestrowano, możesz teraz się zalogować');
            $this->generateView();
        } else {
            $this->generateView();
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign("page_title", "Zarejestruj się");
        App::getSmarty()->display('Register.tpl');
    }
}