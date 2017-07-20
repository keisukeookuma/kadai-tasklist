<?php
namespace TechAcademy\RPG\Characters;
require_once 'character.php'

class Hero extends Character{
  public static $type='主人公';
  
  function __construct(){
    parent:: _construct('主人公',1000,30);
  }
  static function description() {
      print self::$type . 'は、この世界を守る勇者だ!'.PHP_EOL;
      
  }
}
