<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 07/01/15
 * Time: 19:42
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';


use Unitato\Init\Article;

$article = $em->find('Unitato\Init\Article', 1);

var_dump($article);