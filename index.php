<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 05/01/15
 * Time: 12:12
 */

require __DIR__.'/vendor/autoload.php';

use Unitato\Init\Article;

$article = new Article();
$slugify = new \Cocur\Slugify\Slugify();

$title ='Pouet Pouet';

$article
    ->setId(8)
    ->setTitle('Pouet Pouet')
    ->setSlug($slugify->slugify($title))
    ->setStatus(Article::STATUS_PENDING)
;

var_dump($article);