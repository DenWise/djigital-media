<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 10.03.2018
 * Time: 13:43
 */

namespace App\Controllers;

use \Core\View;
use App\Models\Post;


class Posts extends \Core\Controller
{
    public function indexAction()
    {
        $posts = Post::getAll();

        View::renderTemplate('Posts/index.html', [
            'posts' => $posts
        ]);
        var_dump(__DIR__);
    }

    public function addNewAction()
    {
        echo "<h1>Posts</h1><br><p>Hello from AddNew Action!</p>";
    }

    public function editAction()
    {
        htmlspecialchars(print_r($this->route_params, true));
        var_dump($this->route_params);
    }
}