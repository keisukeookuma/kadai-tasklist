<?php
namespace TechAcademy\RPG;
require_once 'hero.php';
require_once 'Slime.php';

use TechAcademy\RPG\Characters\Hero;
class Game{
    static function start(){
        $hero=new Hero();
        $slime_A=new \TechAcademy\RPG\Characters\Slime('A');
        
        $slime_A->attack($hero);
        $hero->attack($slime_A);
        
        Hero::description();
        Characters\Slime::description();
    }
}
Game::start();
