<?php

namespace app\controllers;

use core\App;

class EditCtrl
{
    public function action_edit()
    {
        App::getSmarty()->assign("page_title", "Edytuj bazę danych");
        App::getSmarty()->display("Edit.tpl");
    }
}