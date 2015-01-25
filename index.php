<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 05/01/15
 * Time: 12:12
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/_header.php';
// Display the model
echo $twig ->render('index.html.twig',[
]);