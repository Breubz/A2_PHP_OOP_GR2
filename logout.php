<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 25/01/15
 * Time: 22:10
 */

session_start();
session_destroy();
header('Location:connexion.php?action=logout');