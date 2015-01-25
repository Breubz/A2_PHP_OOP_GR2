<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 25/01/15
 * Time: 21:55
 */
namespace AntoineEisele\PokemonBattle\Model;
interface TrainerInterface
{
    /**
     * @return int
     */
    public function getId();
    /**
     * @return string
     */
    public function getUsername();
    /**
     * @param string $username
     *
     * @return TrainerInterface
     */
    public function setUsername($username);
    /**
     * @return string
     */
    public function getPassword();
    /**
     * @param string $password
     *
     * @return TrainerInterface
     */
    public function setPassword($password);
}