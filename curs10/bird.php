<?php

// clasa copil
require_once ('Animal.php');
require_once ('MoveInterface.php');
class bird extends Animal // implements MoveInterface
{

    const wings = 2;
    public function move()
{
    return 'flying with ' .  self::wings .  ' wings'; // constantele se apeleaza doar in teriorul clasei si se si mostenesc
}
}