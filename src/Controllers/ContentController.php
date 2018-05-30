<?php
namespace HelloWorld\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;
/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{
    /**
     * @param Twig $twig
     * @param LibraryCallContract $libCall
     * @param Request $request
     * @return string
     */
    public function sayHello(
        Twig $twig,
        LibraryCallContract $libCall,
        Request $request
    )
    {
        $packagistResult =
            $libCall->call(
                'HelloWorld::guzzle_connector',
                ['packagist_query' => $request->get('search')]
            );
        if($packagistResult == null)
        {
            $packagistResult = "Hello, there is no info";
        }
        $tests['results'] = "test case";
        return $twig->render('HelloWorld::content.hello', $tests);
    }
}