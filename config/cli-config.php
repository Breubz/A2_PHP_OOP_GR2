<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 06/01/15
 * Time: 12:22
 */
require __DIR__.'/../bootstrap.php';

/**
 * @var \Doctrine\ORM\EntityManager
 */
$entityManager = require __DIR__.'/../bootstrap.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;
return ConsoleRunner::createHelperSet($entityManager);