<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 11.03.2018
 * Time: 8:49
 */

namespace App\Models;


class Post
{
    public static function getAll()
    {
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
            $stmt = $db->query('select id, title, content from posts order by create_at');
            $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $results;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}