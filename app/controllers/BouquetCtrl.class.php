<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class BouquetCtrl
{
    public $records;

    public function action_bouquet()
    {
        $this->records = App::getDB()->select("uslugi", [
            "img",
            "usluga",
            "opis",
            "cena_uslugi",
            "typ"
        ], $where);

        App::getSmarty()->assign('usluga', $this->records);
        App::getSmarty()->assign("page_title", "Pełna oferta bukietów");
        App::getSmarty()->display("Bouquet.tpl");
    }
}