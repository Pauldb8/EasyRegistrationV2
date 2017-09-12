<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 3:13 PM
 */
/* Class loader */
require "Class/autoload.php";
require "Class/strings.eng.php";

/* This is the controller as a Singleton, for full MVC support */
final class Controller{

    protected static $connectedUser;

    /* Controller */
    public static function getInstance(){
        static $inst = null;
        if($inst === null){
            $inst = new Controller();
        }
        return $inst;
    }

    /* Controller construct */
    private function __construct()
    {
    }

    /* Connected user */
    public function getConnectedUser(){
        return $this->connectedUser;
    }
    public function setConnectedUser($user){
        $this->connectedUser = $user;
    }
    public function isConnectedUser(){
        return !is_null($this->getConnectedUser());
    }
}