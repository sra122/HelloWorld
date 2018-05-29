<?php

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;

class ContentController extends Controller
{
    public function sayHello(Twig $twig, LibraryCallContract $libCall, Request $request):string
    {
        $packagistResult =
            $libCall->call(
                'HelloWorld::guzzle_connector',
                ['packagist_query' => $request->get('search')]
            );

        return $twig->render('HelloWorld::content.hello', $packagistResult);
    }

}