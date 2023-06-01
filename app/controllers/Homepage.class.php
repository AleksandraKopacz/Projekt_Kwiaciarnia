<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class MainMenu
{
App::getSmarty()->display("Homepage.tpl");
}