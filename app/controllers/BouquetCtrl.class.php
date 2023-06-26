<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use app\forms\FlowersSearch;

class BouquetCtrl
{
    public $records;
    public $types;
    public $maxPrice;
    public $minPrice;
    public $form;
    public $page;

    public function __construct()
    {
        $this->form = new FlowersSearch();
    }

    public function action_bouquet()
    {
        $this->getParams();

        $search_params = [];

        if (!empty($this->form->to)) {
            $search_params['cena_uslugi[<=]'] = $this->form->to;
        }

        if (isset($this->form->type)) {
            $search_params['typ[~]'] = $this->form->type;
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "cena_uslugi";

        $this->records = App::getDB()->select("uslugi", [
            "img",
            "usluga",
            "opis",
            "cena_uslugi",
            "typ"
        ], $where);

        $this->types = App::getDB()->select("uslugi", [
            "@typ"
        ]);

        $this->maxPrice = App::getDB()->max("uslugi", "cena_uslugi");

        $this->minPrice = App::getDB()->min("uslugi", "cena_uslugi");

        $this->generateView();
    }

    public function getParams()
    {
        $this->form->to = ParamUtils::getFromRequest('priceTo');
        $this->form->type = ParamUtils::getFromRequest('type');
    }

    public function generateView()
    {
        App::getSmarty()->assign('minPrice', $this->minPrice);
        App::getSmarty()->assign('maxPrice', $this->maxPrice);
        App::getSmarty()->assign('types', $this->types);
        App::getSmarty()->assign('usluga', $this->records);
        App::getSmarty()->assign("page_title", "Pełna oferta bukietów");
        App::getSmarty()->display("Bouquet.tpl");
    }
}