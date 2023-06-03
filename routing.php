<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homepage'); #default action

Utils::addRoute('homepage', 'HomepageCtrl');
Utils::addRoute('flowers', 'FlowersCtrl');
Utils::addRoute('order', 'OrderCtrl');
Utils::addRoute('services', 'ServicesCtrl');
Utils::addRoute('stores', 'StoresCtrl');