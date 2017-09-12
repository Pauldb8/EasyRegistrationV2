<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 4:33 PM
 */

/* controller */
require 'Controller/Controller.php';
$controller = Controller::getInstance();

if($controller->isConnectedUser() == false) {
    /* model */
    //require 'Models/auth.model.php';

    /* view */
    $page_title = "EasyRegistration - Login";
    require 'Views/auth.view.php';
}else{
    header("Location: index.php");
}