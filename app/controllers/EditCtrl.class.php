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

    public function __construct()
    {
        $this->form = new DatabaseSearch();
    }

    public function load_data()
    {
        $this->form->tableName = ParamUtils::getFromRequest('tableName');
        $this->form->filter = ParamUtils::getFromRequest('filter');
        $search_params = [];
        if(isset($this->form->filter) && strlen($this->form->filter) > 0)
        {
            if($this->form->tableName == 'uslugi')
                $search_params['usluga[~]'] = '%' . $this->form->filter . '%';
            if($this->form->tableName == 'uzytkownik')
                $search_params['email[~]'] = '%' . $this->form->filter . '%';
            if($this->form->tableName == 'zamowienie')
                $search_params['szczegoly[~]'] = '%' . $this->form->filter . '%';
        }
        $num_params = sizeof($search_params);
        if($num_params > 1)
        {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "id_" . $this->form->tableName;
        $this->records = App::getDB()->select($this->form->tableName, "*", $where);
        $this->generateTableView();
    }

    public function action_edit()
    {
        $this->generateTableView();
        App::getSmarty()->display("TableContent.tpl");
    }

    public function action_table()
    {
        $this->load_data();
        $this->generateTableView();
        App::getSmarty()->display("TableContentPart.tpl");
    }

    public function action_showTable()
    {
        $this->load_data();
        $this->generateTableView();
        App::getSmarty()->display("TableContentPart.tpl");
    }

    public function generateTableView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
    }

    //USLUGI - ADD
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

    //USLUGI - DELETE
    public function action_deleteUslugiShow()
    {
        $this->generateDeleteUslugiView();
    }

    public function action_deleteUslugi()
    {
        $this->form->id_uslugi = ParamUtils::getFromRequest('id_uslugi');
        $this->form->table = App::getDB()->get("uslugi", "*", ["id_uslugi" => $this->form->id_uslugi]);
        if (!empty($this->form->table)) {
            $this->form->table = App::getDB()->delete("uslugi", [
                "id_uslugi" => $this->form->id_uslugi
            ]);
            Utils::addInfoMessage('Usunięto z bazy danych');
        } else {
            Utils::addErrorMessage('Taki rekord nie istnieje');
        }
        $this->generateDeleteUslugiView();
    }

    public function generateDeleteUslugiView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('DeleteUslugi.tpl');
    }

    //UZYTKOWNIK - ADD
    public function action_addUzytkownikShow()
    {
        $this->generateAddUzytkownikView();
    }

    public function action_addUzytkownik()
    {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->rola = ParamUtils::getFromRequest('rola');
        $this->form->table = App::getDB()->get("uzytkownik", "*", ["email" => $this->form->email]);
        if (empty($this->form->table)) {
            $this->form->table = App::getDB()->insert("uzytkownik", [
                "email" => $this->form->email,
                "haslo" => $this->form->haslo,
                "rola" => $this->form->rola
            ]);
            Utils::addInfoMessage('Dodano do bazy danych');
        } else {
            Utils::addErrorMessage('Taki rekord już istnieje');
        }
        $this->generateAddUzytkownikView();
    }

    public function generateAddUzytkownikView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('AddUzytkownik.tpl');
    }

    //UZYTKOWNIK - DELETE
    public function action_deleteUzytkownikShow()
    {
        $this->generateDeleteUzytkownikView();
    }

    public function action_deleteUzytkownik()
    {
        $this->form->id_uzytkownik = ParamUtils::getFromRequest('id_uzytkownik');
        $this->form->table = App::getDB()->get("uslugi", "*", ["id_uzytkownik" => $this->form->id_uzytkownik]);
        if (!empty($this->form->table)) {
            $this->form->table = App::getDB()->delete("uzytkownik", [
                "id_uzytkownik" => $this->form->id_uzytkownik
            ]);
            Utils::addInfoMessage('Usunięto z bazy danych');
        } else {
            Utils::addErrorMessage('Taki rekord nie istnieje');
        }
        $this->generateDeleteUslugiView();
    }

    public function generateDeleteUzytkownikView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('DeleteUzytkownik.tpl');
    }

    //ZAMOWIENIE - ADD
    public function action_addZamowienieShow()
    {
        $this->generateAddZamowienieView();
    }

    public function action_addZamowienie()
    {
        $this->form->szczegoly = ParamUtils::getFromRequest('szczegoly');
        $this->form->id_uzytkownik = ParamUtils::getFromRequest('id_uzytkownik');
        $this->form->table = App::getDB()->get("uzytkownik", "*", ["id_uzytkownik" => $this->form->id_uzytkownik]);
        if (!empty($this->form->table)) {
            $this->form->table = App::getDB()->insert("zamowienie", [
                "szczegoly" => $this->form->szczegoly,
                "id_uzytkownik" => $this->form->id_uzytkownik
            ]);
            Utils::addInfoMessage('Dodano do bazy danych');
        } else {
            Utils::addErrorMessage('Użytkownik o takim id nie istnieje');
        }
        $this->generateAddZamowienieView();
    }

    public function generateAddZamowienieView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('AddZamowienie.tpl');
    }

    //ZAMOWIENIE - DELETE
    public function action_deleteZamowienieShow()
    {
        $this->generateDeleteZamowienieView();
    }

    public function action_deleteZamowienie()
    {
        $this->form->id_zamowienie = ParamUtils::getFromRequest('id_zamowienie');
        $this->form->table = App::getDB()->get("zamowienie", "*", ["id_zamowienie" => $this->form->id_zamowienie]);
        if (!empty($this->form->table)) {
            $this->form->table = App::getDB()->delete("zamowienie", [
                "id_zamowienie" => $this->form->id_zamowienie
            ]);
            Utils::addInfoMessage('Usunięto z bazy danych');
        } else {
            Utils::addErrorMessage('Taki rekord nie istnieje');
        }
        $this->generateDeleteZamowienieView();
    }

    public function generateDeleteZamowienieView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display('DeleteZamowienie.tpl');
    }
}