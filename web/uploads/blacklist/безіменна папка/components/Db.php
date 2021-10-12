<?php

class Db
{
    public static function connect()
    {
        include ROOT.'/config/db.php';
        try{
            $connect = new PDO('mysql:dbname='.DB_NAME.';host='.DB_SERVER, DB_USER, DB_PASSWORD);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connect->exec('SET CHARACTER SET utf8');
            return $connect;
        }
        catch (PDOException $err){
            echo $err->getMessage();
        }
    }
}

?>