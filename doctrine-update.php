<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 07/01/15
 * Time: 19:54
 */


/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';


use Unitato\Init\Article;

/** @var \Doctrine\ORM\EntityRepository $articleRepository */
$articleRepository = $em->getRepository('Unitato\Init\Article');

//Récupération par manager
$article = $articleRepository->find(1);

//Récupère tout les articles
$article = $articleRepository->findAll();

//Récupère l'article avec le titre "Changement de titre"
$article = $articleRepository->findOneBy([
    'title'=> "Changement de titre"
]);



$articleStatus = $articleRepository->findBy([
    'status'=>2
]);

var_dump($articleStatus);

$em->flush();
