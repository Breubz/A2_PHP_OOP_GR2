<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 25/01/15
 * Time: 22:01
 */

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__ . '/_header.php';
if(isset($_GET['action'])) {
    if ($_GET['action'] == 'logout')
        $error = 'You\'ve been disconnected';
    elseif ($_GET['action'] == 'connect')
        $error = "LOL WTF Are you doing ? Get Rekt";
}
else
    $error = NULL;
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
    /** @var \Doctrine\ORM\EntityRepository $trainerRepo */
    $trainerRepo = $em->getRepository('AntoineEisele\PokemonBattle\Trainer');
    try {
        /** @var \AntoineEisele\PokemonBattle\Trainer $trainer */
        $trainer = $trainerRepo->findOneBy([
            'userName' => $_POST['username']
        ]);
    }
    catch(Exception $e){
        $error = $e->getMessage();
    }
    if(!isset($trainer) || $trainer === NULL) {
        $error = "Connection failed, wrong password or username";
    }
    else{
        if($_POST['password'] === $trainer->getPassword()) {
            $_SESSION['trainer'] = $trainer->getId();
            $_SESSION['connect'] = true;
            header('Location:dashboard.php');
        }
        else{
            $error = "Connection failed, wrong password or username";
        }
    }
}
// Display the model
echo $twig ->render('connexion.html.twig',[
    'error' => $error,
]);