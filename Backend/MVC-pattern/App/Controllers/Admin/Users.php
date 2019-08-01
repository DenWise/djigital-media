<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 10.03.2018
 * Time: 17:55
 */

namespace App\Controllers\Admin;


class Users extends \Core\Controller
{
    protected function before()
    {

    }

    public function indexAction()
    {
        echo 'User admin index;';
        var_dump(__DIR__);
    }
}