<?php

namespace app\controllers;

use app\forms\DatabaseSearch;
use core\App;
use core\ParamUtils;
use core\Utils;

class EditCtrl
{
    private $form;
    private $records;
    public $minValue;
    public $maxValue;

    public function __construct()
    {
        $this->form = new DatabaseSearch();
    }

    public function getParams()
    {
        $this->form->tableName = ParamUtils::getFromRequest('tableName');
        $this->generateView();
    }

    public function load_data()
    {
        $this->form->tableName = ParamUtils::getFromRequest('tableName');
        $where = "id_" . $this->form->tableName;
        $this->records = App::getDB()->select($this->form->tableName, "*", $where);
        $this->generateView();
    }

    public function action_edit()
    {
        $this->generateView();
        App::getSmarty()->display("TableContent.tpl");
    }

    public function action_showTable()
    {
        $this->load_data();
        $this->generateView();
        App::getSmarty()->display("TableContentPart.tpl");
    }

    public function action_add()
    {
        $this->generateView();
        App::getSmarty()->display("AddContent.tpl");
    }

    public function action_showAdd()
    {
        $this->getParams();
        if ($this->form->tableName == 'zamowienie') {
            $this->maxValue = App::getDB()->max("uzytkownik", "id_uzytkownik");
            $this->minValue = App::getDB()->min("uzytkownik", "id_uzytkownik");
            App::getSmarty()->assign('maxValue', $this->maxValue);
            App::getSmarty()->assign('minValue', $this->minValue);
        }
        $this->generateView();
        App::getSmarty()->display("AddContent.tpl");

    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
    }

    //USLUGI
    public function action_addUslugiShow()
    {
        $this->generateAddUslugiView();
    }

    public function action_addUslugi()
    {
        $this->form->img = ParamUtils::getFromRequest('img');
        $this->form->usluga = ParamUtils::getFromRequest('usluga');
        $this->form->opis = ParamUtils::getFromRequest('opis');
        $this->form->cena_uslugi = ParamUtils::getFromRequest('cena_uslugi');
        $this->form->typ = ParamUtils::getFromRequest('typ');
        $this->form->table = App::getDB()->get("uslugi", "*", ["usluga" => $this->form->usluga]);
        if (empty($this->form->table)) {
            $this->form->table = App::getDB()->insert("uslugi", [
                "img" => $this->form->img,
                "usluga" => $this->form->usluga,
                "opis" => $this->form->opis,
                "cena_uslugi" => $this->form->cena_uslugi,
                "typ" => $this->form->typ
            ]);
            Utils::addInfoMessage('Dodano do bazy danych');
        } else {
            Utils::addErrorMessage('Taki rekord już istnieje');
        }
        $this->generateAddUslugiView();
    }

    public function generateAddUslugiView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('AddUslugi.tpl');
    }
}