<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class FlowersCtrl
{
    public function action_flowers()
    {
        App::getSmarty()->assign("page_title", "Stwórz własny bukiet");
        App::getSmarty()->display("Flowers.tpl");
    }
}