<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\OrderForm;
use core\Utils;

class OrderCtrl
{
    private $form;
    private $tableCount;

    public function __construct()
    {
        $this->form = new OrderForm();
    }

    public function action_order()
    {
        $this->form->email = SessionUtils::load($emailaddress, $keep = true);
        $this->form->details = ParamUtils::getFromRequest('details');
        $this->tableCount = App::getDB()->count("zamowienie");
        if (empty($this->form->details)) {
            Utils::addErrorMessage('Prosimy o wypełnienie szczegółów zamówienia');
        } elseif ($this->tableCount >= 10) {
            Utils::addErrorMessage('Obecnie mamy zbyt dużo zamówień, przepraszamy');
        } else {
            $where = ["email" => $this->form->email];
            $this->form->userid = App::getDB()->get("uzytkownik", [
                "id_uzytkownik"
            ], $where);

            $this->form->inputDetails = App::getDB()->insert("zamowienie", [
                "szczegoly" => $this->form->details,
                "id_uzytkownik" => implode(",", $this->form->userid)
            ]);

            Utils::addInfoMessage('Zamówienie zostało do nas przesłane. Skontaktujemy się z państwem na wskazany adres e-mail.');
        }

        $this->generateView();
    }

    public function action_orderView()
    {
        $this->form->email = SessionUtils::load($emailaddress, $keep = true);
        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->assign("page_title", "Zamów kwiaty");
        App::getSmarty()->display("Order.tpl");
    }

}