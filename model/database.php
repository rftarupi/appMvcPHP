<?php
class Database
{
    public static function Conectar()
    {

        $pdo = new PDO('mysql:host=appmvcservermysql.mysql.database.azure.com;dbname=appmvctarupi;charset=utf8', 'rtarupi@appmvcservermysql', 'Rtc10lovely1');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
