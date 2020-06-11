<?php
class Database
{
    private static $dbName = 'customers'; // Edit with your Data Base Name
    private static $dbHost = 'localhost'; // Edit with your Localhost
    private static $dbUsername = 'root';  // Edit with your User Name
    private static $dbUserPassword = '0000'; // Edit With your Password

    private static $cont = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect() {
        if (null === self::$cont) {
            try {
                self::$cont =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                $message = date('Y-m-d H:i:s') . ': ' . $e->getMessage() . "\n";
                file_put_contents('error-pdo-connection.txt', $message, FILE_APPEND | LOCK_EX);
                die('Site down');
            }
        }
        return self::$cont;
    }

    public static function disconnect() {
        self::$cont = null;
    }
}
