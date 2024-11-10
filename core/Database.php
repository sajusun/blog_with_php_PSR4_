<?php

namespace Core;

use PDO;

class Database {
    private static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        }
        return self::$instance;
    }
}
