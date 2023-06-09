<?php

namespace app\controllers;

use core\App;

class HomepageCtrl
{
    public function action_homepage()
    {
        App::getSmarty()->assign("page_title", "Strona główna");
        App::getSmarty()->display("Homepage.tpl");
    }
}