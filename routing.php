<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homepage'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('homepage', 'HomepageCtrl');
Utils::addRoute('flowers', 'FlowersCtrl');
Utils::addRoute('bouquet', 'BouquetCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('registerShow', 'RegisterCtrl');
//USER
Utils::addRoute('order', 'OrderCtrl', ['0']);
Utils::addRoute('orderView', 'OrderCtrl', ['0']);
//ADMIN
Utils::addRoute('edit', 'EditCtrl', ['1']);
Utils::addRoute('showTable', 'EditCtrl', ['1']);
Utils::addRoute('showTablePart', 'EditCtrl', ['1']);
//ADD
Utils::addRoute('addUslugi', 'EditCtrl', ['1']);
Utils::addRoute('addUzytkownik', 'EditCtrl', ['1']);
Utils::addRoute('addZamowienie', 'EditCtrl', ['1']);
Utils::addRoute('addUslugiShow', 'EditCtrl', ['1']);
Utils::addRoute('addUzytkownikShow', 'EditCtrl', ['1']);
Utils::addRoute('addZamowienieShow', 'EditCtrl', ['1']);
//DELETE
Utils::addRoute('deleteUslugi', 'EditCtrl', ['1']);
Utils::addRoute('deleteUzytkownik', 'EditCtrl', ['1']);
Utils::addRoute('deleteZamowienie', 'EditCtrl', ['1']);
Utils::addRoute('deleteUslugiShow', 'EditCtrl', ['1']);
Utils::addRoute('deleteUzytkownikShow', 'EditCtrl', ['1']);
Utils::addRoute('deleteZamowienieShow', 'EditCtrl', ['1']);