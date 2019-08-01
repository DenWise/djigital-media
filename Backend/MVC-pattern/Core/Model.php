<?php
/**
 * Created by PhpStorm.
 * User: develop_root
 * Date: 11.03.2018
 * Time: 9:21
 */

namespace Core;


abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if ($db === null) {
            $host = 'localhost';
            $dbname = 'dbname';
            $username = 'username';
            $password = '';

            try {
                $db = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                    $username, $password);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}