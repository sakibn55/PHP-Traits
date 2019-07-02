<?php
require_once 'Mobile.php'; //Require the Mobile.php file
require_once 'Laser.php'; //Require the Laser.php file
require_once 'Projector.php'; //Require the Projector.php file
//Galaxy class
class Galaxy extends Mobile
{
    use Laser, Projector {

    Laser::power insteadof Projector;
    Projector::power as Ppower; //this does the trick
    }
}
//So now I can use the power method in Trait Laser
$obj = new Galaxy;
$obj->power();
$obj->Ppower();
//So now I can use the range method in Trait Projector
$obj->range();
//As well as the methods in Mobile class
$obj->battery();
