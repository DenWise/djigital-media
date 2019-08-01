<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 10.03.2018
 * Time: 18:21
 */
namespace Core;


class View
{
    public static function renderTemplate($template, $args = [])
    {

        $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/App/Views');
        $twig = new \Twig_Environment($loader);

        echo $twig->render($template, $args);
    }
}