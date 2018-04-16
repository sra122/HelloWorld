<?php

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorld::hello');
    }

    public function createTableDatabase(Contracts $contracts)
    {
        if($contracts->createTable("Hello", 10, 20))
        {
            $table_name = $contracts->getTableName();
            return $table_name;
        }
    }
}