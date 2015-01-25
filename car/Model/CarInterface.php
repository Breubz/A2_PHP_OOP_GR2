<?php
/**
 * Created by PhpStorm.
 * User: AntoineEisele
 * Date: 06/01/15
 * Time: 10:13
 */

namespace Unitato\Init\Car\Model;


interface CarInterface
{
    /**
     * @return int
     */
    public function getSpeed();

    /**
     * @param int $speed
     *
     * @return CarInterface
     */
    public function setSpeed($speed);
}