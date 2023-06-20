<?php

namespace app\controllers;

use core\App;

class OrderCtrl
{

    public function action_order()
    {
        App::getSmarty()->assign("page_title", "Zamów kwiaty");
        App::getSmarty()->display("Order.tpl");
    }

}