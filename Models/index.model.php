<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 1:39 PM
 */

function getArticles(){
    $bdd = DBFactory::getConnection();
    $articles = $bdd->query('select * from News order by date_created desc');
    return $articles;
}