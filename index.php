<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 9:53 AM
 */

/* controller */
require 'Controller/Controller.php';
$controller = Controller::getInstance();

if($controller->isConnectedUser() == true) {
    /* model */
    require 'Models/index.model.php';
    $articles = getArticles();

    /* view */
    require 'Views/index.view.php';
}else{
    header("Location: auth.php");
}