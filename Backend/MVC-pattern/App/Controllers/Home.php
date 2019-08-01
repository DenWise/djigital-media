<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 10.03.2018
 * Time: 13:43
 */

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name' => 'Dave',
            'colors' => ['red', 'green', 'blue']
        ]);
        var_dump(__DIR__);
    }

    protected function before()
    {
//        echo "(before)";
    }

    protected function after()
    {
//        echo "(after)";
    }
}