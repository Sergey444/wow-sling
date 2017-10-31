<?php


class Db 
{
    
    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include($paramsPath);
        
        $db = mysqli_connect($params['host'], $params['user'], $params['password'], $params['dbname']);
        $db->query("set names 'utf8'");
        
//        $dsn = "mysqli:host={$params['host']};dbname={$params['dbname']}";
//        $db = new PDO($dsn, $params['user'], $params['password']);
        
        return $db;
    }
}
