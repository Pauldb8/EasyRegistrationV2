<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 2:03 PM
 */
/**
 * Class DBFactory
 * This class initializes PDO Microsoft SQL Server connection
 */
class DBFactory
{
    public static function getConnection()
    {
        require "global.php";
        $db = new PDO('sqlsrv:server=' . $bdd_server . ';Database=' . $bdd_database. ';ConnectionPooling=0', $bdd_user, $bdd_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}