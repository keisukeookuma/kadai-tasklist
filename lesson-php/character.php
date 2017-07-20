<?php
namespace TechAcademy\RPG\Characters

class Character {
   public static $type='';
   
   public $hp =  1;
   public $power=1;
   
   function _construct($hp,$power){
     $this->hp=$hp;
     $this->power=$power;
   }
   
   function name(){
     return $this::$type;
   }
   
   function attack($character) {
       $character->hp=$character->hp - $this->power;
       print $this->name() . 'が' .$character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた!' . PHP_EOL;
       
       if ($character->hp <=0){
           $this->defeat($character);
       }
     
   }
   function defeat($character){
     print $this->name()  . 'は' .$character->name().'を倒した!' . PHP_EOL;
   }
}


$hero=new Hero();
$slime_A= new Slime('A');

$slime_A->attack($hero);
$hero->attack($slime_A);

Hero::description();
Slime::description();