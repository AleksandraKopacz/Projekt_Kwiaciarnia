<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use app\forms\LoginForm;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;

class LoginCtrl
{
    private $form;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function action_loginShow()
    {
        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign("page_title", "Zaloguj się");
        App::getSmarty()->display('Login.tpl');
    }

    public function action_login()
    {
        if ($this->validate()) {
            if (RoleUtils::inRole('1')) {
                App::getRouter()->redirectTo('edit');
            } elseif (RoleUtils::inRole('0')) {
                App::getRouter()->redirectTo('orderView');
            }
        } else {
            $this->generateView();
        }
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

        $where = ["email" => $this->form->login,
            "haslo" => $this->form->pass];
        $this->form->user = App::getDB()->get("uzytkownik", [
            "rola"
        ], $where);

        if (!empty($this->form->user)) {
            if (implode(",", $this->form->user) == 1) {
                RoleUtils::addRole('1');
                App::getRouter()->redirectTo("edit");
            } elseif (implode(",", $this->form->user) == 0) {
                RoleUtils::addRole('0');
                SessionUtils::store($emailaddress, $this->form->login);
                App::getRouter()->redirectTo("order");
            }
        } else {
            Utils::addErrorMessage('Niepoprawny adres e-mail lub hasło');
        }
        return !App::getMessages()->isError();
    }

    public function action_logout()
    {
        session_destroy();
        App::getRouter()->redirectTo("login");
    }
}