<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homepage'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('homepage', 'HomepageCtrl');
Utils::addRoute('flowers', 'FlowersCtrl');
Utils::addRoute('order', 'OrderCtrl', ['0']);
Utils::addRoute('bouquet', 'BouquetCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('edit', 'EditCtrl', ['1']);
Utils::addRoute('register', 'RegisterCtrl');